<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Formations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->integer('ownerId');
            $table->integer('categoryId');
            $table->string('title');
            $table->string('description');
            $table->string('thumbnail');
            $table->string('price');
            $table->string('duration');
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
        //
        Schema::dropIfExists('formations');
    }
}
