<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSurveyCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('survey_comments', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->integer('survey_header_id')->index('fk_survey_comments_surveys1');
			$table->integer('user_id')->index('fk_survey_comments_users1');
			$table->string('comments', 4096)->nullable();
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
		Schema::drop('survey_comments');
	}

}
