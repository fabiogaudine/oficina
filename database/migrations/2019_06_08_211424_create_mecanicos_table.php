<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMecanicosTable extends Migration
{
    public function up()
    {
        Schema::create('mecanicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('rg');
            $table->string('cpf');
            $table->string('especialidade');
            $table->text('observacao');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mecanicos');
    }
}
