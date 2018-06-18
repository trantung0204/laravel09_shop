<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->unique();
            $table->string('customer_name');
            $table->integer('user_id')->nullable();
            $table->string('email')->unique();
            $table->string('mobile');
            $table->string('address');
            $table->string('payment')->nullable();
            $table->string('note')->nullable();
            $table->string('status')->nullable();
            $table->time('receive_at')->nullable();
            $table->decimal('total');
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
        Schema::dropIfExists('orders');
    }
}
