<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovieAll extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_all', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('movie_poster');
            $table->string('content_rating');
            $table->string('title');
            $table->string('foreign_title');
            $table->string('release_date');
            $table->string('time');
            $table->string('movie_info');
            $table->string('actor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie_all');
    }
}
