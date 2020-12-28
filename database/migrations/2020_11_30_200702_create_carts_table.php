<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('CategoryID');
            $table->unsignedBigInteger('ProductsID');
            $table->string('Category');
            $table->integer('Price');
            $table->string('Count');
            $table->timestamps();

            $table->foreign('CategoryID')->references('id')->on('categories');
            $table->foreign('ProductsID')->references('id')->on('products');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
