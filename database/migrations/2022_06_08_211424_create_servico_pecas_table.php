<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicoPecasTable extends Migration
{
    public function up()
    {
        Schema::create('servico_pecas', function (Blueprint $table) {
            $table->integer('servico_id');
            $table->integer('peca_id');
            $table->text('observacao');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('servico_pecas');
    }
}
