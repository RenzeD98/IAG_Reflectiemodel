<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('cases', function (Blueprint $table) {
          $table->increments('id')->unsigned();
          $table->integer('reflection_id')->unsigned();
          $table->timestamps();
      });
      Schema::table('cases', function (Blueprint $table) {
          $table->foreign('reflection_id')->references('id')->on('reflections');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cases');
    }
}
