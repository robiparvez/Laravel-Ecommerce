<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    public function up()
    {
        Schema::create('books', function (Blueprint $table)
        {
            $table->increments('id');

            $table->string('title')->index();
            $table->integer('isbn')->unsigned()->unique();
            $table->string('cover')->nullable();

            $table->double('price', 10, 2)->unsigned();

            $table->integer('author_id')->index();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('books');
    }
}
