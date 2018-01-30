<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         if (!Schema::hasTable('videos')){
<<<<<<< HEAD:database/migrations/2018_01_29_100425_create_videos_table.php
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->longText('source');
            $table->longText('description');
=======

        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('source');
            $table->longText('description');//Long Text
>>>>>>> master:database/migrations/2018_01_29_100427_create_videos_table.php
            $table->timestamps();
        });

         }
            

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
