<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrainQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brain_questions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('brain_tests_id')->unsigned();


            $table->foreign('brain_tests_id')->references('id')->on('brain_tests');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('brain_questions');
    }
}
