<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRetificacoesTable extends Migration{

    public function up(){
        Schema::create('retificacoes', function(Blueprint $table){
            $table->increments('id');
            $table->integer('cursos_polos_id')->unsigned();
            $table->foreign('cursos_polos_id')->references('id')->on('cursos_polos');
            $table->tinyInteger('tipo');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('retificacoes');
    }
}
