<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePersonIdentification extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('person_identification', function(Blueprint $table)
		{
			$table->increments('person_id');
			$table->string('issm',50);
			$table->string('laquab',50);
			$table->date('birthday');
			$table->string('image_url');



			$table->integer('birth_place')->unsigned();
			$table->foreign('birth_place')
				  	->references('place_id')
					->on('place')
					->onDelete('restrict')
					->onUpdate('cascade');

			$table->integer('living_place')->unsigned();
			$table->foreign('living_place')
					->references('place_id')
					->on('place')
					->onDelete('restrict')
					->onUpdate('cascade');

			$table->integer('social_informations')->unsigned();
			$table->foreign('social_informations')
					->references('social_id')
					->on('person_social_informations')
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
			$table->dropForeign('person_identification_birth_place_foreign');
			$table->dropForeign('person_identification_living_place_foreign');
			$table->dropForeign('person_identification_person_social_informations_foreign');
		});
		Schema::drop('person_identification');
	}

}
