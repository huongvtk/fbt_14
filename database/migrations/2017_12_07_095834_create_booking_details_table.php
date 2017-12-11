<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname');
            $table->unsignedInteger('booking_id');
            $table->foreign('booking_id')->references('id')->on('booking_tours');
            $table->date('day_birth');
            $table->tinyInteger('gender');
            $table->string('address');
            $table->string('phone');
            $table->string('cmnd');
            $table->string('job');
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
        Schema::dropIfExists('booking_details');
    }
}
