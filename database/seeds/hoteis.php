<?php

use Illuminate\Database\Seeder;

class hoteis extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('hotels')->insert([
    		['nome'=>'Parque das flores','qualificacao-id'=>1],
    		
    		['nome'=>'Jardim botânico','qualificacao-id'=>2],

    		['nome'=>'Mar atlântico','qualificacao-id'=>3]
    	]);
    }
}
