<?php

use Illuminate\Database\Seeder;

class qualificacoes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('qualificacaos')->insert([
    		['estrela'=>3,'valorDiaNormal'=>110,'valorFimSemana'=>90,'valorDiaNormalFidelidade'=>80,'valorFimSemanaFidelidade'=>80],

    		['estrela'=>4,'valorDiaNormal'=>160,'valorFimSemana'=>60,'valorDiaNormalFidelidade'=>110,'valorFimSemanaFidelidade'=>50],

    		['estrela'=>5,'valorDiaNormal'=>220,'valorFimSemana'=>140,'valorDiaNormalFidelidade'=>100,'valorFimSemanaFidelidade'=>40]

    	]);
    }
}
