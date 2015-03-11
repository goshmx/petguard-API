<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMascotaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mascota', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();

            $table->string('nombre', 255);
            $table->text('raza');
            $table->text('color');
            $table->text('tamano');
            $table->integer('edad');
            $table->text('historia');
            $table->text('comentarios');
            $table->text('tipo');
            $table->integer('id_persona');
            $table->text('lat');
            $table->text('lon');
            $table->binary('foto');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mascota');
	}

}
