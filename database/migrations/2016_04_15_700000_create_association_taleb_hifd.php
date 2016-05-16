<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssociationTalebHifd extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('taleb_hifd', function(Blueprint $table)
		{
			$table->increments('taleb_hifd_id');
			$table->integer('taleb_id')->unsigned();
			$table->foreign('taleb_id')
				->references('taleb_id')
				->on('taleb')
				->onDelete('restrict')
				->onUpdate('cascade');
			$table->integer('hifd_id')->unsigned();
			$table->foreign('hifd_id')
				->references('hifd_id')
				->on('quran_hifd')
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
		Schema::table('taleb_hifd', function(Blueprint $table) {
			$table->dropForeign('taleb_hifd_taleb_id_foreign');
			$table->dropForeign('taleb_hifd_hifd_id_foreign');

		});
		Schema::drop('taleb_hifd');
	}

}
