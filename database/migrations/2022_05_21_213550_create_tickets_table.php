<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('seat_number');
            $table->timestamps();

            // Foreign Key Constraints
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('cinema_movie_id');
            $table->foreign('cinema_movie_id')->references('id')->on('cinema_movies');

            // Unique constraints
            $table->unique(['user_id','cinema_movie_id', 'seat_number']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
};
