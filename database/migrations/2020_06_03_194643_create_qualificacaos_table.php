<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQualificacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('qualificacaos', function (Blueprint $table) {
            $table->id();
            $table->integer('estrela');
            $table->float('valorDiaNormal',8,2);
            $table->float('valorFimSemana',8,2);
            $table->float('valorDiaNormalFidelidade',8,2);
            $table->float('valorFimSemanaFidelidade',8,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qualificacaos');
    }
}
