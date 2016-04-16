<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInitialTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->integer('parent_id')->nullable();
            $table->index('parent_id', 'parent_id');
        });

        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('title', 200);
            $table->float('price');
            $table->float('original_price')->nullable();
            $table->text('excerpt');
            $table->text('description');
        });

        Schema::create('category_product', function (Blueprint $table) {
            $table->primary(['category_id', 'product_id']);
            $table->integer('category_id');
            $table->integer('product_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('categories');
        Schema::drop('products');
        Schema::drop('category_product');
    }
}
