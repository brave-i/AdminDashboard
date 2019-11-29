<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incomes', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('user_id');

            $table->integer('income_streams');
            $table->integer('monthly_income');
            $table->integer('confidence');
            $table->integer('days');

            $table->string('stream_name');
            $table->integer('last_year_income');
            $table->integer('last_year_income_before_tax');

            $table->integer('projected_yearly_income');
            $table->integer('projected_yearly_income_before_tax');

            $table->integer('max_number_of_overlapping_income_streams');
            $table->integer('number_of_income_streams');
            $table->integer('verified_income');

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
        Schema::dropIfExists('incomes');
    }
}
