<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRadarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('radars', function (Blueprint $table) {
          $table->increments('id')->unsigned();
          $table->integer('reflection_id')->unsigned();
          $table->string('name')->nullable();
          $table->string('description')->nullable();
          $table->timestamps();
      });
      Schema::table('radars', function (Blueprint $table) {
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
        Schema::dropIfExists('radars');
    }
}
