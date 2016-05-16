<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCheikh extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cheikh', function(Blueprint $table)
		{
			$table->increments('cheikh_id');
			$table->string('cheikh_issm');
			$table->string('cheikh_laquab');
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
		Schema::drop('cheikh');
	}

}
