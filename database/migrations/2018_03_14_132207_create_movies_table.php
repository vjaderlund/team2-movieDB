<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');

            $table->string('Title');
            $table->text('Picture')->nullable();
            $table->text('Genre')->nullable();
            $table->text('Description')->nullable();
            $table->integer('Runtime')->unsigned()->nullable();
            $table->date('ReleaseDate')->nullable();
            $table->integer('director_id')->unsigned();
            $table->integer('actor_id')->unsigned();
            $table->integer('users_id')->unsigned();

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
        Schema::dropIfExists('movies');
    }
}
