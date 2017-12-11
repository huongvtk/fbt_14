<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePriceToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_tours', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('price_id');
            $table->foreign('price_id')->references('id')->on('prices')->onDelete('cascade');
            $table->unsignedInteger('tour_id');
            $table->foreign('tour_id')->references('id')->on('tours')->onDelete('cascade');
            $table->date('date');
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
        Schema::dropIfExists('price_tours');
    }
}
