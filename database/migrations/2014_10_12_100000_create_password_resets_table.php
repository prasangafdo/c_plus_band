<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasswordResetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         if (!Schema::hasTable('password_resets')){
<<<<<<< HEAD
            Schema::create('password_resets', function (Blueprint $table) {
=======

       Schema::create('password_resets', function (Blueprint $table) {
>>>>>>> master
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
           // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

<<<<<<< HEAD

         }
            
     }
=======
         }
            
 
    }
>>>>>>> master

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('password_resets');
    }
}
