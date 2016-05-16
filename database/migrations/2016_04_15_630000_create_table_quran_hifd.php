<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableQuranHifd extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('quran_hifd', function(Blueprint $table)
		{
			$table->increments('hifd_id');

			$table->integer('activity_borders_id')->unsigned();
			$table->foreign('activity_borders_id')
				->references('activity_borders_id')
				->on('activity_borders')
				->onDelete('restrict')
				->onUpdate('cascade');


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
		Schema::table('quran_hifd', function(Blueprint $table) {
			$table->dropForeign('quran_hifd_activity_borders_id_foreign');
		});
		Schema::drop('quran_hifd');
	}

}
