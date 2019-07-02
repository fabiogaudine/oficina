<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicosTable extends Migration
{
    public function up()
    {
        Schema::create('servicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao');
            $table->integer('proprietario_id');
            $table->integer('veiculo_id');
            $table->integer('servico_peca_id');
            $table->text('observacao');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('servicos');
    }
}
