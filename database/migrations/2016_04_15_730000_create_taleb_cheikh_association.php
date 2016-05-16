<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTalebCheikhAssociation extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('taleb_cheikh', function(Blueprint $table)
		{
			$table->integer('taleb_id')->unsigned();
			$table->foreign('taleb_id')
				->references('taleb_id')
				->on('taleb')
				->onDelete('cascade')
				->onUpdate('cascade');
			$table->integer('cheikh_id')->unsigned();
			$table->foreign('cheikh_id')
				->references('cheikh_id')
				->on('cheikh')
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
		Schema::table('taleb_cheikh', function(Blueprint $table) {
			$table->dropForeign('taleb_cheikh_taleb_id_foreign');
			$table->dropForeign('taleb_cheikh_cheikh_id_id_foreign');
		});
		Schema::drop('taleb_cheikh');
	}

}
