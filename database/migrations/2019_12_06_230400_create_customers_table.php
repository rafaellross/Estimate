<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255);
            $table->string('abn', 50);
            $table->string('email', 100);

            $table->string('street', 255)->nullable();
            $table->string('street2', 255)->nullable();
            $table->string('suburb', 255)->nullable();
            $table->unsignedBigInteger('state')->nullable();
            $table->string('contact', 100)->nullable();
            $table->string('contact_phone', 50)->nullable();
            $table->string('contact_mobile', 50)->nullable();
            $table->string('contact_email', 50)->nullable();


            $table->timestamps();

            
            $table->foreign('state')->references('id')->on('states');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
