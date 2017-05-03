<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cases extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('reflections', function (Blueprint $table) {
          $table->increments('id', 7)->unsigned();
          $table->integer('user_id', 7)->unsigned();
          $table->string('title')->nullable();
          $table->string('tags')->nullable();
          $table->text('message')->nullable();
          $table->rememberToken();
          $table->timestamps();

          $table->foreign('user_id')->references('id')->on('users');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reflections');
    }
}
