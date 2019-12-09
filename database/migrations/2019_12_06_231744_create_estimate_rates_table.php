<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstimateRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estimate_rates', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('rate_id')->nullable();
          $table->unsignedBigInteger('estimate_id')->nullable();
          $table->string('description', 255);
          $table->string('unit', 20)->default('ea');
          $table->float('cost_exgst', 15, 5);
          $table->float('cost_incgst', 15, 5);
          $table->string('cost_type', 20)->nullable(); //If it isn't a rate, user will define type

          $table->timestamps();

          $table->foreign('rate_id')->references('id')->on('rates');
          $table->foreign('estimate_id')->references('id')->on('estimates');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estimate_rates');
    }
}
