<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FormationsChapters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formations_chapters', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('formationId')->unsigned()->index()->nullable();
            $table->foreign('formationId')->references('id')->on('formations');
    
            $table->bigInteger('chapterId')->unsigned()->index()->nullable();
            $table->foreign('chapterId')->references('id')->on('chapters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formations_chapters');
    }
}
