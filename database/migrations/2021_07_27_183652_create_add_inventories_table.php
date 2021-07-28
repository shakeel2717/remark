<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_inventories', function (Blueprint $table) {
            $table->id();
            $table->integer('users_id');
            $table->integer('rma_id');
            $table->integer('reason_id')->nullable();
            $table->string('serial');
            $table->string('model');
            $table->string('issue');
            $table->string('creditNote')->nullable();
            $table->string('sale_price');
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
        Schema::dropIfExists('add_inventories');
    }
}
