<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         if (!Schema::hasTable('photos')){

<<<<<<< HEAD:database/migrations/2018_01_29_100224_create_photos_table.php
            Schema::create('photos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->longText('source');
            $table->longText('description');
            $table->timestamps();
        });
         }
            

=======
        Schema::create('photos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('source');
            $table->longText('description');//Long Text
            $table->timestamps();
        });

         }
>>>>>>> master:database/migrations/2018_01_29_100226_create_photos_table.php
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photos');
    }
}
