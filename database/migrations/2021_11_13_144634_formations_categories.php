<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FormationsCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formations_categories', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('formationId')->unsigned()->index()->nullable();
            $table->foreign('formationId')->references('id')->on('formations');

            $table->bigInteger('categoryId')->unsigned()->index()->nullable();
            $table->foreign('categoryId')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formations_categories');
    }
}
