<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstimateRateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estimate_rate_items', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('rate_item_id');
          $table->unsignedBigInteger('item_id')->nullable();
          $table->string('code', 10);
          $table->string('description', 255);
          $table->string('unit', 20)->default('ea');
          $table->float('cost_exgst', 15, 5);
          $table->float('cost_incgst', 15, 5);
          $table->string('cost_type', 20);
          $table->timestamps();

          $table->foreign('rate_item_id')->references('id')->on('estimate_rates');
          $table->foreign('item_id')->references('id')->on('rate_items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estimate_rate_items');
    }
}
