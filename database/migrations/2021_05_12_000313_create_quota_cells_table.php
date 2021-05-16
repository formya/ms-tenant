<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotaCellsTable extends Migration
{
   public function up()
   {
      Schema::create('quota_cells', function (Blueprint $table) {
         $table->id()->startingValue(1000000001);
         $table->bigInteger('quota_id');
         $table->string('title', 255);
         $table->text('condition');
         $table->integer('collect_count');
         $table->timestamps();
      });
   }

   public function down()
   {
      Schema::dropIfExists('quota_cells');
   }
}
