<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceiptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('receipts', function (Blueprint $table) {
            $table->integer('product_id')->unsigned();
            $table->integer('component_id')->unsigned();
            $table->primary(['product_id', 'component_id']);
            $table->double('quantity',5,2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('receipts');
    }
}
