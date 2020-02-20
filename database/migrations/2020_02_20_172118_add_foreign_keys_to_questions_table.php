<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToQuestionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('questions', function(Blueprint $table)
		{
			$table->foreign('option_group_id', 'fk_questions_option_type_group1')->references('id')->on('option_groups')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('input_type_id', 'fk_questions_question_types1')->references('id')->on('input_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('survey_section_id', 'fk_questions_survey_sections1')->references('id')->on('survey_sections')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('questions', function(Blueprint $table)
		{
			$table->dropForeign('fk_questions_option_type_group1');
			$table->dropForeign('fk_questions_question_types1');
			$table->dropForeign('fk_questions_survey_sections1');
		});
	}

}
