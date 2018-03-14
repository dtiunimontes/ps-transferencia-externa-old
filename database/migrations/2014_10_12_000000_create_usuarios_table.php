<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration{

    public function up(){
        Schema::create('usuarios', function(Blueprint $table){
            $table->increments('id');
            $table->string('nome', 100);
            $table->string('email', 100)->unique();
            $table->string('password');
            $table->string('cpf', 11)->unique();
            $table->string('rg', 20)->unique()->nullable();
            $table->string('org_exped', 20)->nullable();
            $table->date('data_nasc')->nullable();
            $table->string('telefone', 20)->nullable();
            $table->integer('permissao')->default(1);
            $table->integer('cep')->nullable();
            $table->string('logradouro', 80)->nullable();
            $table->string('numero', 25)->nullable();
  			$table->string('complemento', 40)->nullable();
  			$table->string('cidade', 100)->nullable();
  			$table->string('bairro', 100)->nullable();
            $table->string('estado', 2)->nullable();
            $table->float('media')->comment('Media aritmética das disciplinas cursadas pelo candidato')->nullable();
            $table->integer('qtd_disc_falta')->comment('Quantidade de disciplinas a serem cumpridas')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(){
        Schema::dropIfExists('usuarios');
    }
}
