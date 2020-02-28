<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStationSurveyAnswersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('station_survey_answers', function(Blueprint $table)
        {
            $table->integer('id', true);
            $table->integer('survey_header_id');
            $table->integer('station_id');
//            $table->integer('answer_id');
            $table->integer('question_id');
            $table->integer('option_choice_id');
            $table->integer('user_id');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('station_survey_answers');
    }

}
