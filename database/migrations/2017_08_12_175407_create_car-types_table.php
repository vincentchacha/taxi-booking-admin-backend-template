<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartypes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('base_distance');
            $table->string('minimum_fare');
            $table->string('price_per_mile');
            $table->string('price_per_time');
            $table->string('seat_capacity');
            $table->integer('visibility_status');
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
        Schema::dropIfExists('cartypes');
    }
}
