<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInelligentgamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inelligentgames', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('CategoryID');
            $table->string('Description');
            $table->timestamps();

            $table->foreign('CategoryID')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inelligentgames');
    }
}
