<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableActivityBorders extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activity_borders', function(Blueprint $table)
		{
			$table->increments('activity_borders_id');
			$table->enum('direction',['from_last','from_begin','throught']);
			$table->integer('from_thoumoun');
			$table->integer('from_hizb');
			$table->integer('to_thoumoun');
			$table->integer('to_hizb');
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
		Schema::drop('activity_borders');
	}

}
