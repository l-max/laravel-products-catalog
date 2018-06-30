<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_options', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });
        Schema::create('product_options_values', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('option_id');
            $table->unsignedInteger('product_id');
            $table->foreign('option_id')->references('id')->on('product_options');
            $table->foreign('product_id')->references('id')->on('products');
            $table->string('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_options');
        Schema::dropIfExists('product_options_values');
    }
}
