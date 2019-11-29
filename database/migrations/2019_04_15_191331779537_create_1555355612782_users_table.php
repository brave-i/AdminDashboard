<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1555355612782UsersTable extends Migration
{
    public function up()
    {

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('name');

            $table->datetime('date_of_birth')->nullable();
            $table->string('phone')->nullable();
            $table->string('current_address')->nullable();
            $table->string('street')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->string('country')->nullable();
            $table->string('last_4_ssn')->nullable();

            $table->string('password');
            $table->datetime('email_verified_at')->nullable();
            $table->string('remember_token')->nullable();
            $table->timestamps();
            
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
