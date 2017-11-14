<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->integer('cartype_id');
            $table->string('vehicle_model');
            $table->string('vehicle_number');
            $table->string('contacts');
            $table->string('picture');
            $table->string('bio');
            $table->text('address');
            $table->string('state');
            $table->string('country');
            $table->string('zip_code');
            $table->string('password');
            $table->double('latitude');
            $table->double('longitude');
            $table->string('token');
            $table->integer('token_expiry');
            $table->string('device_token');
            $table->string('device_type');
            $table->string('login_by');
            $table->string('social_unique_id');
            $table->integer('is_approved');
            $table->integer('is_active');
            $table->integer('is_available');
            $table->double('payment_remaining');
            $table->double('refund_remaining');
            $table->string('deleted_at');

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
        Schema::dropIfExists('providers');
    }
}
