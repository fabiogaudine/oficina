<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePecasTable extends Migration
{
    public function up()
    {
        Schema::create('pecas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao');
            $table->string('marca');
            $table->integer('quantidade');
            $table->float('valor');
            $table->text('observacao');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pecas');
    }
}
