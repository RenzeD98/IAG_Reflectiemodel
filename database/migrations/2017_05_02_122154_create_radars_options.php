<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRadarsOptions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('radars_options', function (Blueprint $table) {
          $table->increments('id', 2)->unsigned();
          $table->integer('radar_id', 2)->unsigned();
          $table->string('name', 200);
          $table->text('info');
          $table->timestamps();

          $table->foreign('radar_id')->references('id')->on('radars');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('radars_options');
    }
}
