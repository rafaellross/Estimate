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

            $table->string('street', 255)->nullable();
            $table->string('street2', 255)->nullable();
            $table->string('suburb', 255)->nullable();
            $table->smallInteger('state')->nullable();
            $table->string('contact', 100)->nullable();
            $table->string('contact_phone', 20)->nullable();
            $table->string('contact_mobile', 20)->nullable();
            $table->string('contact_email', 50)->nullable();


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
        Schema::dropIfExists('customers');
    }
}
