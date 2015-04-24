<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComandos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comandos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('siglas', 50);
			$table->string('nombrelargo', 100);
			$table->string('telefono', 60);
			$table->integer('organismo_id')->unsigned();
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
		Schema::drop('comandos');
	}

}
