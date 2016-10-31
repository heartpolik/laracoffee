<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('components', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->double('quantity',5,2);
            $table->timestamps();
            $table->softDeletes();
            $table->string('photo')->default('/images/uploads/no-image.png');
            $table->double('price',5,2);
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
        Schema::drop('components');
    }
}
