<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSurveySectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('survey_sections', function(Blueprint $table)
		{
			$table->foreign('survey_header_id', 'fk_survey_sections_surveys1')->references('id')->on('survey_headers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('survey_sections', function(Blueprint $table)
		{
			$table->dropForeign('fk_survey_sections_surveys1');
		});
	}

}
