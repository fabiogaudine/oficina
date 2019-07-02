<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVeiculosTable extends Migration
{
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('proprietario_id');
            $table->string('marca');
            $table->string('ano');
            $table->string('modelo');
            $table->text('description');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('veiculos');
    }
}
