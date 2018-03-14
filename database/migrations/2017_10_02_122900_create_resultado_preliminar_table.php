<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultadoPreliminarTable extends Migration{

    public function up(){
        Schema::create('resultado_preliminar', function(Blueprint $table){
            $table->integer('cursos_polos_id')->unsigned();
            $table->foreign('cursos_polos_id')->references('id')->on('cursos_polos');
            $table->integer('usuarios_id')->unsigned();
            $table->foreign('usuarios_id')->references('id')->on('usuarios');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('resultado_preliminar');
    }
}
