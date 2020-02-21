<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuestionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('questions', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('parent_id')->nullable();
			$table->integer('survey_section_id')->index('fk_questions_survey_sections1');
			$table->integer('input_type_id')->index('fk_questions_question_types1');
			$table->string('question_name');
			$table->string('question_subtext', 500)->nullable();
			$table->boolean('question_required_yn')->nullable();
			$table->boolean('answer_required_yn')->nullable()->default(1);
			$table->integer('option_group_id')->nullable()->index('fk_questions_option_type_group1');
			$table->boolean('allow_mutiple_option_answers_yn')->nullable()->default(0)->unique();
			$table->integer('dependent_question_id')->nullable();
			$table->integer('dependent_question_option_id')->nullable();
			$table->integer('dependent_answer_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('questions');
	}

}
