<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->collation='utf8_unicode_ci';
            $table->charset='utf8';
            $table->increments('id');
            $table->string('code');
            $table->string('name');
            $table->decimal('origin_price', 10, 2);
            $table->decimal('sale_price', 10, 2);
            $table->mediumText('description')->nullable();
            $table->longText('content')->nullable();
            $table->string('slug')->unique();
            $table->integer('brand_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->tinyInteger('status')->default(1)->comment('0. out of stock, 1. sale');
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
        Schema::dropIfExists('products');
    }
}
