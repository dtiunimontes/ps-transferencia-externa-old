<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosPolosTable extends Migration{

    public function up(){
        Schema::create('cursos_polos', function(Blueprint $table){
            $table->integer('id')->unsigned();
            $table->primary('id');
            $table->integer('curso_id')->unsigned();
            $table->foreign('curso_id')->references('id')->on('cursos');
            $table->integer('polo_id')->unsigned();
            $table->foreign('polo_id')->references('id')->on('polos');
            $table->integer('vagas')->unsigned();
            $table->string('periodo', 2);
            $table->enum('turno', ['Diurno', 'Noturno', 'Matutino', 'Vespertino']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(){
        Schema::dropIfExists('cursos_polos');
    }
}
