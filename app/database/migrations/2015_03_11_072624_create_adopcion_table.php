<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdopcionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('adopcion', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();

            $table->integer('id_persona');
            $table->integer('id_mascota');
            $table->boolean('exitosa');
            $table->text('comentario');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('adopcion');
	}

}
