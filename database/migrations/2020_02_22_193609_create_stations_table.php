<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stations', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name');
			$table->string('address')->nullable();
			$table->string('phone')->nullable();
			$table->string('email')->nullable();

			$table->integer('organization_id')->nullable();
			$table->integer('country_id')->nullable();
			$table->integer('state_id')->nullable();
			$table->string('lga', 191)->nullable();
			$table->string('lng', 191)->nullable();
			$table->string('lat', 191)->nullable();
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
		Schema::drop('stations');
	}

}
