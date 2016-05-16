<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableQuranIdjaza extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('quran_idjaza', function(Blueprint $table)
		{
			$table->increments('idjaza_id');
			$table->string('idjaza_title',255);
			$table->text('idjaza_detail');
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
		Schema::drop('quran_idjaza');
	}

}
