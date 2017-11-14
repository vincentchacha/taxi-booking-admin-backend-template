<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('contacts');
            $table->string('picture');
            $table->string('bio');
            $table->text('address');
            $table->string('state');
            $table->string('country');
            $table->string('zip_code');
            $table->string('password');
            $table->string('token');
            $table->integer('token_expiry');
            $table->string('device_token');
            $table->string('device_type');
            $table->string('login_by');
            $table->string('social_unique_id');
            $table->integer('referred_by');
            $table->string('deleted_at');
            $table->integer('promo_count');
            $table->integer('is_referee');
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
        Schema::dropIfExists('owners');
    }
}
