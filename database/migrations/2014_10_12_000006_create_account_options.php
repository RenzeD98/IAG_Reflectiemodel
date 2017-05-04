<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountOptions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('account_options', function (Blueprint $table) {
          $table->increments('id')->unsigned();
          $table->integer('user_id')->unsigned();
          $table->string('name');
          $table->string('value');
          $table->timestamps();
      });
      Schema::table('account_options', function (Blueprint $table) {
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
        Schema::dropIfExists('account_options');
    }
}
