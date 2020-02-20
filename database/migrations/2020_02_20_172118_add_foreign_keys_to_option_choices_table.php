<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOptionChoicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('option_choices', function(Blueprint $table)
		{
			$table->foreign('option_group_id', 'fk_option_type_choices_option_type_group1')->references('id')->on('option_groups')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('option_choices', function(Blueprint $table)
		{
			$table->dropForeign('fk_option_type_choices_option_type_group1');
		});
	}

}
