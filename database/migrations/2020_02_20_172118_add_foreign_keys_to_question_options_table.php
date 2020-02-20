<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToQuestionOptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('question_options', function(Blueprint $table)
		{
			$table->foreign('option_choice_id', 'fk_question_options_option_choices1')->references('id')->on('option_choices')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('question_id', 'fk_question_options_questions1')->references('id')->on('questions')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('question_options', function(Blueprint $table)
		{
			$table->dropForeign('fk_question_options_option_choices1');
			$table->dropForeign('fk_question_options_questions1');
		});
	}

}
