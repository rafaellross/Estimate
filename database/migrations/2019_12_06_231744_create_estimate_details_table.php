<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstimateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estimate_details', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('rate_id')->nullable();
          $table->string('description', 255);
          $table->string('unit', 20)->default('ea');
          $table->float('cost_exgst', 15, 5);
          $table->float('cost_incgst', 15, 5);
          $table->string('cost_type', 20)->nullable(); //If it isn't a rate, user will define type

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
        Schema::dropIfExists('estimate_details');
    }
}
