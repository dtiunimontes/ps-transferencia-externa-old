<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePolosTable extends Migration{

    public function up(){
        Schema::create('polos', function(Blueprint $table){
            $table->increments('id');
            $table->string('nome', 100);
            $table->timestamps();
            $table->softDeletes();            
        });
    }

    public function down(){
        Schema::dropIfExists('polos');
    }
}
