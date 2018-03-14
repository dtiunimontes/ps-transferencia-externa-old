<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecursosTable extends Migration{

    public function up(){
        Schema::create('recursos', function(Blueprint $table){
            $table->increments('id');
            $table->integer('inscricoes_id')->unsigned()->unique();
            $table->foreign('inscricoes_id')->references('id')->on('inscricoes');
            $table->text('motivo_indeferimento_etapa1')->nullable();
            $table->text('motivo_indeferimento_etapa2')->nullable();
            $table->text('recurso_etapa1')->nullable();
            $table->text('recurso_etapa2')->nullable();
            $table->text('resposta_recurso_etapa1')->nullable();
            $table->text('resposta_recurso_etapa2')->nullable();
            $table->string('autor_resposta_recurso_etapa1', 150)->nullable();
            $table->string('autor_resposta_recurso_etapa2', 150)->nullable();
            $table->dateTime('data_recurso_etapa1')->nullable();
            $table->dateTime('data_recurso_etapa2')->nullable();
            $table->dateTime('data_resposta_recurso_etapa1')->nullable();
            $table->dateTime('data_resposta_recurso_etapa2')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(){
        Schema::dropIfExists('recursos');
    }
}
