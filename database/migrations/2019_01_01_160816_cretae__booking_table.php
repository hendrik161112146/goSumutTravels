<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CretaeBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('booking', function (Blueprint $table) {
            $table->increments('id');
            $table->string('from')->nullable();
            $table->string('to')->nullable();
            $table->string('name_tenant')->nullable();
            $table->date('start_date')->nullable();
            $table->date('return_date')->nullable();
            $table->integer('adult')->nullable();
            $table->integer('child')->nullable();
            $table->string('email')->nullable();
            $table->integer('hotel_id')->nullable();
            $table->integer('status')->default(0);
            $table->integer('room_need')->nullable();
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
        //
        Schema::dropIfExists('booking');
    }
}
