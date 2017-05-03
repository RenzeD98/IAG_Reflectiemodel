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
          $table->increments('id', 2)->unsigned();
          $table->integer('reflection_id', 7)->unsigned();
          $table->string('name');
          $table->string('description');
          $table->timestamps();

          $table->foreign('reflection_id')->references('id')->on('cases');
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
