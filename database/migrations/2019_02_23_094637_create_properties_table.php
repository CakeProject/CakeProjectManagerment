<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('cake_id');
            $table->unsignedInteger('flavour_id');
            $table->unsignedInteger('shape_id');
            $table->unsignedInteger('color_id');
            $table->foreign('cake_id')->references('id')->on('cakes')->onDelete('cascade');
            $table->foreign('flavour_id')->references('id')->on('flavours')->onDelete('cascade');
            $table->foreign('shape_id')->references('id')->on('shapes')->onDelete('cascade');
            $table->foreign('color_id')->references('id')->on('colors')->onDelete('cascade');
            
            $table->mediumText('image')->nullable();
            $table->string('description');
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
        Schema::dropIfExists('properties');
    }
}
