<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderBookTable extends Migration
{
    public function up()
    {
        // PIVOT TABLE
        Schema::create('order_book', function (Blueprint $table)
        {
            $table->increments('id');

            $table->integer('order_id')->unsigned()->index();
            $table->integer('book_id')->unsigned()->index();

            $table->integer('amount');
            $table->double('price', 10, 2);
            $table->double('total', 10, 2);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_book');
    }
}
