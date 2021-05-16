<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
   public function up()
   {
      Schema::create('forms', function (Blueprint $table) {
         $table->id()->startingValue(100000001);
         $table->bigInteger('survey_id');
         $table->bigInteger('user_id');
         $table->json("source")->nullable();
         $table->timestamps();
      });
   }

   public function down()
   {
      Schema::dropIfExists('forms');
   }
}
