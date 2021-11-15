<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('transactions')) {
            // Code to create table
            Schema::create('transactions', function (Blueprint $table) {
                $table->id();
                $table->string('customerID', 12);
                $table->string('transID', 10);
                $table->string('transType', 12);
                $table->decimal('amount', 10, 2);
                $table->string('transDate', 19);
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
        Schema::dropIfExists('transactions');
    }
}
