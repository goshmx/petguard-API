<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comentario', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();

            $table->integer('id_persona');
            $table->integer('id_mascota');
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
		Schema::drop('comentario');
	}

}
