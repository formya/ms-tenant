<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
   public function up()
   {
      Schema::create('profiles', function (Blueprint $table) {
         $table->bigInteger('user_id')->primary();
         $table->string('first_name', 20);
         $table->string('last_name', 20);
         $table->string('title', 50)->nullable();
         $table->string('phone', 20)->nullable();
         $table->json('meta')->nullable();
         $table->timestamps();
      });
   }

   public function down()
   {
      Schema::dropIfExists('profiles');
   }
}
