<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
   public function up()
   {
      Schema::create('questions', function (Blueprint $table) {
         $table->id()->startingValue(1000000001);
         $table->string('uid', 36);
         $table->string('title', 255);
         $table->text('description')->nullable();
         $table->json('structure')->nullable();
         $table->string('type', 10); // sa, ma, input, paragraph, matrix
         $table->bigInteger('parent_id');
         $table->json('meta');
         $table->timestamps();
      });
   }

   public function down()
   {
      Schema::dropIfExists('questions');
   }
}
