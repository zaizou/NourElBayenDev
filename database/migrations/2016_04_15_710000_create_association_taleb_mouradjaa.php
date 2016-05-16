<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssociationTalebMouradjaa extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('taleb_mouradjaa', function(Blueprint $table)
		{
			$table->increments('taleb_mouradjaaid');
			$table->integer('taleb_id')->unsigned();
			$table->foreign('taleb_id')
				->references('taleb_id')
				->on('taleb')
				->onDelete('restrict')
				->onUpdate('cascade');
			$table->integer('mouradjaa_id')->unsigned();
			$table->foreign('mouradjaa_id')
				->references('mouradjaa_id')
				->on('quran_mouradjaa')
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
		Schema::table('taleb_moudjaa', function(Blueprint $table) {
			$table->dropForeign('taleb_moudjaa_taleb_id_foreign');
			$table->dropForeign('taleb_moudjaa_hifd_id_foreign');

		});

		Schema::drop('taleb_mouradjaa');
	}

}
