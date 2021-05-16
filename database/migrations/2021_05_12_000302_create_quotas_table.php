<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotasTable extends Migration
{
   public function up()
   {
      Schema::create('quotas', function (Blueprint $table) {
         $table->id()->startingValue(1000000001);
         $table->bigInteger('user_id');
         $table->string('title', 255);
         $table->timestamps();
      });
   }

   public function down()
   {
      Schema::dropIfExists('quotas');
   }
}
