<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class ReservaController extends Controller
{
	protected $campos = ['clienteNome','clienteCPF','hotel-id','fidelidade','data'];
	public function reserva(Request $request)
	{
		$hoteis = \App\hotel::all();
		if (isset($request['cadastrarVaga'])) {
			$this->cadastrarVaga($request);
		}
		return view('reserva',compact('hoteis'));
	}
	public function cadastrarVaga($request)
	{
		$reserva = new \App\reserva();
		foreach ($this->campos as $key => $campo) {
			if(isset($request[$campo]))
				$reserva[$campo] = $request[$campo];
		}
		$request['hotel'] = $request['hotel-id'];
		$reserva['valor'] = $this->calcularReserva($request);

		if ($reserva->save()) {
			Session::flash('message', ['text'=>'Vaga cadastrada' , 'tipo' => 'sucesso']);
		}else{
			Session::flash('message', ['text'=>'Erro ao cadastrar!!' , 'tipo' => 'erro']);
		}

	}
	public function calcularReserva(Request $request)
	{
		$valor = '';
		if (isset($request['hotel']) && isset($request['fidelidade']) && isset($request['data'])) {

			if ($request['data']=='') return '';
			
			$hotel = \App\hotel::find($request['hotel']);

			$diaS = date('N',strtotime($request['data']));

			$fimSemana = $diaS>5?1:0; //Verifica se é sabado ou domingo 

			if ($request['fidelidade']==1) {
				if ($fimSemana) {
					$chave = 'valorFimSemanaFidelidade';
				}else{
					$chave = 'valorDiaNormalFidelidade';
				}
			}else{
				if ($fimSemana) {
					$chave = 'valorFimSemana';
				}else{
					$chave = 'valorDiaNormal';
				}
			}
			
			$valor = $hotel->qualificacao[$chave];
		}
		return $valor;
	}

}
