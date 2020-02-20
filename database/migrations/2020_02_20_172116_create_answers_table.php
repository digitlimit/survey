<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnswersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('answers', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id')->index('fk_answers_surveyees1');
			$table->integer('question_option_id')->index('fk_answers_question_options1');
			$table->integer('answer_numeric')->nullable();
			$table->string('answer_text')->nullable();
			$table->boolean('answer_yn')->nullable();
			$table->integer('unit_of_measure_id')->nullable()->index('fk_answers_unit_of_measure1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('answers');
	}

}
