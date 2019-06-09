<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmsTable extends Migration
{
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('title');
            $table->text('description');
            $table->date('release_date');
            $table->enum('rating',[ 1, 2, 3, 4, 5] );
            $table->integer('genre_id');
            $table->string('photo');
            $table->string('slug');
            $table->timestamps();

        });
    }
    
    public function down()
    {
        Schema::dropIfExists('films');
    }
}
