<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSavingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('savings')) {
            // Code to create table
            Schema::create('savings', function (Blueprint $table) {
                $table->id();
                $table->string('customerID', 12);
                $table->string('currYear', 4);
                $table->decimal('january', 10, 2);
                $table->decimal('february', 10, 2);
                $table->decimal('march', 10, 2);
                $table->decimal('april', 10, 2);
                $table->decimal('may', 10, 2);
                $table->decimal('june', 10, 2);
                $table->decimal('july', 10, 2);
                $table->decimal('august', 10, 2);
                $table->decimal('september', 10, 2);
                $table->decimal('october', 10, 2);
                $table->decimal('november', 10, 2);
                $table->decimal('december', 10, 2);
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
        Schema::dropIfExists('savings');
    }
}
