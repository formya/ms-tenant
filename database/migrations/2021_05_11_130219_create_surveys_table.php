<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveysTable extends Migration
{
   public function up()
   {
      Schema::create('surveys', function (Blueprint $table) {
         $table->id()->startingValue(10000001);
         $table->bigInteger('project_id');
         $table->bigInteger('user_id');
         $table->integer('version')->default(0);
         $table->string('status', 20)->default('inactive'); // active, inactive
         $table->integer('survey_order')->default(1);
         $table->json('meta')->nullable();
         $table->timestamp('locked_at')->nullable();
         $table->bigInteger('locked_user')->nullable();
         $table->timestamps();
      });
   }

   public function down()
   {
      Schema::dropIfExists('surveys');
   }
}
