<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTalebEventAssociation extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('taleb_event', function(Blueprint $table)
		{
			$table->integer('taleb_id')->unsigned();
			$table->foreign('taleb_id')
				->references('taleb_id')
				->on('taleb')
				->onDelete('cascade')
				->onUpdate('cascade');
			$table->integer('event_id')->unsigned();
			$table->foreign('event_id')
				->references('event_id')
				->on('academy_event')
				->onDelete('cascade')
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

		Schema::table('taleb_event', function(Blueprint $table) {
			$table->dropForeign('taleb_event_taleb_id_foreign');
			$table->dropForeign('taleb_event_event_id_foreign');
		});
		Schema::drop('taleb_event');
	}

}
