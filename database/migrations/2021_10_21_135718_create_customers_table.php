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
        if (!Schema::hasTable('customers')) {
            // Code to create table
            Schema::create('customers', function (Blueprint $table) {
                $table->increments('id');
                $table->string('NatID', 12);
                $table->string('firstname', 30);
                $table->string('lastname', 30);
                $table->string('email', 40);
                $table->string('PhoneNo', 12);
                $table->string('regDate', 19);
                $table->string('password', 20);
            });
        }
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
