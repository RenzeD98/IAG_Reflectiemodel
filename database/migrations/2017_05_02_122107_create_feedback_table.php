<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('feedback', function (Blueprint $table) {
          $table->increments('id', 7)->unsigned();
          $table->integer('reflection_id', 7)->unsigned();
          $table->string('title', 200);
          $table->text('messages');
          $table->boolean('read')->nullable();
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
        Schema::dropIfExists('feedback');
    }
}
