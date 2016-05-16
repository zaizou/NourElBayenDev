<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTaleb extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('taleb', function(Blueprint $table)
		{
			$table->increments('taleb_id');
			$table->bigInteger('points');


			$table->integer('personal_id')->unsigned();
			$table->foreign('personal_id')
				->references('person_id')
				->on('person_identification')
				->onDelete('restrict')
				->onUpdate('cascade');


			$table->rememberToken();
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
		Schema::table('taleb', function(Blueprint $table) {
			$table->dropForeign('taleb_person_id_foreign');
		});

		Schema::drop('taleb');
	}

}
