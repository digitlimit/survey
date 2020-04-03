<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSurveySectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('survey_sections', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('survey_section_id')->nullable();
			$table->integer('survey_header_id')->nullable()->index('fk_survey_sections_surveys1');
			$table->string('section_name', 80)->nullable();
//			$table->string('section_name', 80)->nullable()->unique();
			$table->string('section_title', 45)->nullable();
			$table->string('section_subheading', 45)->nullable();
			$table->boolean('section_required_yn')->nullable()->default(1);
            $table->integer('weight')->default(0);
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
		Schema::drop('survey_sections');
	}

}
