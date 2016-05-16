<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTalebAcademyAccountAssociation extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('taleb_academy_account', function(Blueprint $table)
		{
			$table->integer('taleb_id')->unsigned();
			$table->foreign('taleb_id')
				->references('taleb_id')
				->on('taleb')
				->onDelete('restrict')
				->onUpdate('cascade');
			$table->integer('account_id')->unsigned();
			$table->foreign('account_id')
				->references('account_id')
				->on('academy_account')
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
		Schema::table('taleb_academy_account', function(Blueprint $table) {
			$table->dropForeign('taleb_academy_account_taleb_id_foreign');
			$table->dropForeign('taleb_academy_account_account_id_foreign');
		});
		Schema::drop('taleb_academy_account');
	}

}
