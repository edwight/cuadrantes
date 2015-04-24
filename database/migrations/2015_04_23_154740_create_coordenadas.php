<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoordenadas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('coordenadas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('prefijo', 50);
			$table->string('referencia', 50);
			$table->string('municipio', 60);
			$table->string('latitude', 60);
			$table->string('longitude', 60);
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
		Schema::drop('coordenadas');
	}

}
