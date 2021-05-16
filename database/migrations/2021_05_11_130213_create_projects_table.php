<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
   public function up()
   {
      Schema::create('projects', function (Blueprint $table) {
         $table->id()->startingValue(1000001);
         $table->bigInteger('user_id');
         $table->string('name', 255);
         $table->text('description')->nullable();
         $table->string('mode', 20)->default('dev'); // dev, online, stop, end, maintain
         $table->integer('survey_count')->default(1);
         $table->json('meta')->nullable();
         $table->timestamps();
      });
   }

   public function down()
   {
      Schema::dropIfExists('projects');
   }
}
