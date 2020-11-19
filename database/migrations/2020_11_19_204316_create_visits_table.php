<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('visits', function (Blueprint $table) {
      $table->id();
      $table->string('ip', 45);
      $table->timestamp('created_at');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('visits');
  }
}
