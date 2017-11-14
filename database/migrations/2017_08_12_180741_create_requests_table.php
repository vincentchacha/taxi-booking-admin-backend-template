<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('provider_id');
            $table->integer('owner_id');
            $table->string('date_time');
            $table->integer('ride_status');
            $table->float('cost_amount');
            $table->integer('payment_type');
            $table->integer('is_paid');
            $table->integer('is_walker_started');
            $table->integer('is_walker_arrived');
            $table->integer('is_started');
            $table->integer('is_completed');
            $table->float('distance');
            $table->float('time');
            $table->float('cash_payment');
            $table->float('card_payment');
            $table->float('promo_payment');
            $table->string('promo_code');
            $table->string('time_zone');
            $table->string('src_address');
            $table->string('dest_address');


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
        Schema::dropIfExists('requests');
    }
}
