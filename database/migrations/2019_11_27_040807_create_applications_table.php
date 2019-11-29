<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('app_country');
            $table->string('app_city');
            $table->string('app_state');
            $table->string('neighborhoods')->nullable();
            $table->integer('applicant_amount')->nullable();
            $table->string('amenities')->nullable();
            $table->integer('bedrooms')->nullable();
            $table->integer('bathrooms')->nullable();
            $table->datetime('start_date')->nullable();
            $table->integer('total_target_rent')->nullable();
            $table->integer('individual_target_rent')->nullable();           
            $table->string('application_link')->nullable();
            $table->integer('app_total_stated_income')->nullable();
            $table->integer('app_total_verified_income')->nullable();
            $table->integer('app_total_credit_account_balance')->nullable();
            $table->enum('status', [
                "created",
                "pending",
                "submitted",
                "declined",
                "withdrawn",
                "approved",
            ])->default("created");

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
        Schema::dropIfExists('applications');
    }
}
