<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reservee_id')->unsigned();
            $table->foreign('reservee_id')->references('id')->on('reservees');
            $table->integer('room_id')->unsigned();
            $table->foreign('room_id')->references('id')->on('rooms');
            $table->string('name', 100);
            $table->string('description', 500);
            $table->date('date');
            $table->time('time_start');
            $table->time('time_end');
            $table->string('status', 10); //create table?
            $table->string('comment', 500);
            $table->boolean('archived')->default(false); //create table?
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
        Schema::dropIfExists('reservations');
    }
}
