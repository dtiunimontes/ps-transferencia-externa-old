<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigsTable extends Migration{

    public function up(){
        Schema::create('configs', function(Blueprint $table){
            $table->increments('id');
            $table->dateTime('inicio_inscricoes');
            $table->dateTime('termino_inscricoes');
            $table->dateTime('inicio_resultado_preliminar');
            $table->dateTime('termino_resultado_preliminar');
            $table->dateTime('inicio_resultado_final');
            $table->dateTime('termino_resultado_final');
            $table->dateTime('inicio_recursos_etapa1');
            $table->dateTime('inicio_recursos_etapa2');
            $table->dateTime('termino_recursos_etapa1');
            $table->dateTime('termino_recursos_etapa2');

            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('configs');
    }
}
