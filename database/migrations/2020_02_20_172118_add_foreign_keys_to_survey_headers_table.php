<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSurveyHeadersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('survey_headers', function(Blueprint $table)
		{
			$table->foreign('organization_id', 'fk_surveys_organizations1')->references('id')->on('organizations')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('survey_headers', function(Blueprint $table)
		{
			$table->dropForeign('fk_surveys_organizations1');
		});
	}

}
