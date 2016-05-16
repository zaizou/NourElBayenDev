<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAcademyPrize extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('academy_prize', function(Blueprint $table)
		{
			$table->increments('prize_id');
			$table->string('prize_title',255);
			$table->bigInteger('prize_value');
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
		Schema::drop('academy_prize');
	}

}
