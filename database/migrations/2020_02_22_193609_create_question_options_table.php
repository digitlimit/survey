<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuestionOptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('question_options', function(Blueprint $table)
		{
            $table->integer('id', true);
			$table->integer('question_id')->index('fk_question_options_questions1');
			$table->integer('option_choice_id')->index('fk_question_options_option_choices1');
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
		Schema::drop('question_options');
	}

}
