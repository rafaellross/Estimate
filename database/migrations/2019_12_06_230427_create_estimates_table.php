<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstimatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estimates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('project_name', 255);
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->string('status', 5)->nullable();
            $table->date('due_dt')->nullable();
            $table->date('price_dt')->nullable();

            //Project Details (Address and Contact)
            $table->string('project_street', 255)->nullable();
            $table->string('project_street2', 255)->nullable();
            $table->string('project_suburb', 255)->nullable();
            $table->unsignedBigInteger('project_state')->nullable();
            $table->string('project_contact', 100)->nullable();
            $table->string('project_contact_phone', 50)->nullable();
            $table->string('project_contact_mobile', 50)->nullable();
            $table->string('project_contact_email', 50)->nullable();

            $table->float('cost_exgst', 15, 5);
            $table->float('cost_incgst', 15, 5);

            $table->float('total_exgst', 15, 5);
            $table->float('total_incgst', 15, 5);
            $table->float('total_gst', 15, 5);


            $table->timestamps();


            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('project_state')->references('id')->on('states');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estimates');
    }
}
