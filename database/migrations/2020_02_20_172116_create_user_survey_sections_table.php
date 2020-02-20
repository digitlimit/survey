<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserSurveySectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_survey_sections', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->integer('user_id')->index('fk_user_survey_sections_users1');
			$table->integer('survey_section_id')->index('fk_user_survey_sections_survey_sections1');
			$table->dateTime('completed_on')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_survey_sections');
	}

}
