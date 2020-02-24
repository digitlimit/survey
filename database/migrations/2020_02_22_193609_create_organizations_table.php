<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrganizationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('organizations', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 80)->unique();
			$table->string('address_1', 191)->nullable();
			$table->string('address_2', 191)->nullable();
			$table->string('address_3', 191)->nullable();
			$table->string('phone_1', 191)->nullable();
			$table->string('phone_2', 191)->nullable();
			$table->string('phone_3', 191)->nullable();
			$table->string('email', 191)->nullable();
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
		Schema::drop('organizations');
	}

}
