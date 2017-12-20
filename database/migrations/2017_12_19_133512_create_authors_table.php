<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    public function up()
    {
        Schema::create('authors', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('name')->index();
            $table->string('surname');

            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('authors');
    }
}
