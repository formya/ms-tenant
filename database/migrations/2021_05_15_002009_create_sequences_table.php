<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSequencesTable extends Migration
{
   public function up()
   {
      Schema::create('sequences', function (Blueprint $table) {
         $table->id();
         $table->string('name')->unique();
         $table->bigInteger('value');
         $table->timestamps();
      });
   }

   public function down()
   {
      Schema::dropIfExists('sequences');
   }
}
