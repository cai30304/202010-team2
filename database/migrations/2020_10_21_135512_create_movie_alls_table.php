<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Ramsey\Uuid\v1;

class CreateMovieAllsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_alls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('movie_name');
            $table->string('english_name');
            $table->string('movie_about');
            $table->string('movie_length');
            $table->string('actors');
            $table->string('release_date');
            $table->string('hall');
            $table->string('rating');
            $table->string('poster');
            $table->string('trailer');
            $table->string('seat');
            $table->string('movie_imgA');
            $table->string('movie_imgB');
            $table->string('movie_imgC');
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
        Schema::dropIfExists('movie_alls');
    }
}
