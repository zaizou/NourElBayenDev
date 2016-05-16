<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAcademyEvent extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('academy_event', function(Blueprint $table)
		{
			$table->increments('event_id');
			$table->string('event_name',50);
			$table->string('event_type',15);

			$table->integer('event_period')->unsigned();
			$table->foreign('event_period')
				->references('event_period')
				->on('event_period')
				->onDelete('restrict')
				->onUpdate('cascade');

			$table->integer('place_id')->unsigned();
			$table->foreign('place_id')
				->references('place_id')
				->on('place')
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
		Schema::table('person_identification', function(Blueprint $table) {
			$table->dropForeign('event_period_event_period_foreign');
			$table->dropForeign('place_place_id_foreign');
		});

		Schema::drop('academy_event');
	}

}
