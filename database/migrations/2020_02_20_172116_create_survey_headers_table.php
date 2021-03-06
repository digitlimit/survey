<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSurveyHeadersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('survey_headers', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('organization_id')->index('fk_surveys_organizations1');
			$table->string('survey_name', 80)->nullable()->unique('survey_name_UNIQUE');
			$table->string('instructions', 4096)->nullable();
			$table->string('other_header_info')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('survey_headers');
	}

}
