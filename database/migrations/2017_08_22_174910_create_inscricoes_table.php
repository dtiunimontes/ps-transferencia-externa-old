<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscricoesTable extends Migration{

    public function up(){
        Schema::create('inscricoes', function(Blueprint $table){
            $table->increments('id');
            $table->integer('usuarios_id')->unsigned();
            $table->foreign('usuarios_id')->references('id')->on('usuarios');
            $table->integer('cursos_polos_id')->unsigned();
            $table->foreign('cursos_polos_id')->references('id')->on('cursos_polos');
            $table->tinyInteger('status_dae')->default(0);
            $table->string('num_dae', 20)->nullable();
            $table->date('vencimento')->nullable();
            $table->date('mes_referencia')->nullable();
            $table->tinyInteger('status_envelope1')->default(0);
            $table->tinyInteger('status_envelope2')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(){
        Schema::dropIfExists('inscricoes');
    }
}
