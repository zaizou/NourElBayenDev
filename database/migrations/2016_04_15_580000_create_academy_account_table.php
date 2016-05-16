<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademyAccountTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('academy_account', function(Blueprint $table)
		{
			$table->increments('account_id');
			$table->string('nickname',50);
			$table->string('email',50);
			$table->string('password',255);
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
		Schema::drop('academy_account');
	}

}
