@extends('layout.paginaInicial')
@section('content')
<div class="container">
    <form class="row">
        <div class="col-sm-6">
            <label>Nome Completo</label>
            <input type="text" maxlength="200" name="clienteNome" class="form-control" required="">
        </div>

        <div class="col-sm-3">
            <label>CPF(apenas numeros)</label>
            <input type="text" class="form-control" name="clienteCPF" maxlength="11" required="">
        </div>
        <div class="col-sm-4">
         <label>Hotel Desejado</label>
         <select class="form-control calcularValor"  name="hotel-id" required="">
             <option value="" disabled="" selected="">Selecione...</option>
             <?php foreach ($hoteis as $key => $hotel): ?>
                 <option value="{{$hotel->id}}">{{$hotel->nome}}</option>
             <?php endforeach ?>
         </select>
     </div>
     <div class="col-sm-4">
        <label>É cliente com fidelidade?</label>
        <label>Sim <input type="radio" class="calcularValor" value="1" required="" name="fidelidade"></label>
        <label>Não <input type="radio" class="calcularValor" value="0" required="" name="fidelidade"></label>
    </div>
    <div class="col-sm-4">
        <label>Data desejada</label>
        <input type="date" name="data" required="" class="form-control calcularValor" min="{{date('Y-m-d')}}">
    </div>

    <div class="col-sm-12"></div>
    <div class="col-sm-3">
        <label>Valor</label>
        <input type="text" class="form-control" id="valor" readonly="">
    </div>
    <div class="col-sm-12"></div>
    <div class="col-sm-12 text-right">
        <button class="btn btn-primary" type="submit" name="cadastrarVaga">Reservar Vaga</button>
    </div>
</form>
</div>
@endsection