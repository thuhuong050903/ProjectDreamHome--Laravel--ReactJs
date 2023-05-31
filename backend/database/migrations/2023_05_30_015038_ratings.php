<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id('rating_id')->autoIncrement();
            $table->unsignedBigInteger('apartment_id');
            $table->unsignedBigInteger('user_id');
            $table->integer('number_rating');
            $table->text('comment')->nullable();

            $table->foreign('apartment_id')->references('apartment_id')->on('apartments');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ratings');
    }
};
