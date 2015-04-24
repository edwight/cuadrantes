<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganismos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('organismos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('siglas',60);
			$table->string('nombrelargo',100);
			$table->string('telefono',50)->nullable();
			$table->string('logo',100)->nullable();
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
		Schema::drop('organismos');
	}

}
