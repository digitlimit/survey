<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOptionChoicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('option_choices', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('option_group_id')->index('fk_option_type_choices_option_type_group1');
			$table->string('option_choice_name', 45);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('option_choices');
	}

}
