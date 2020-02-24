<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCountriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('countries', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('iso', 5)->unique();
			$table->string('name', 50)->unique();
			$table->enum('status', array('disabled','enabled'))->default('disabled');
			$table->string('description', 191)->nullable();
			$table->string('iso3', 5)->nullable();
			$table->string('fips', 5)->nullable();
			$table->string('continent', 5)->nullable();
			$table->string('currency_code', 5)->nullable();
			$table->string('currency_name', 15)->nullable();
			$table->string('phone_prefix', 20)->nullable();
			$table->string('postal_code', 50)->nullable();
			$table->string('languages', 50)->nullable();
			$table->string('geonameid', 30)->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('countries');
	}

}
