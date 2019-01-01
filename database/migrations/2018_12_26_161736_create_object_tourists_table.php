<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjectTouristsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('object_tourists', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumText('object_title')->nullable();
            $table->mediumText('category_id')->nullable();
            $table->string('meta_description')->nullable();
            $table->integer('object_view')->nullable();
            $table->longText('object_description')->nullable();
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
        Schema::dropIfExists('object_tourists');
    }
}
