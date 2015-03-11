<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMensajeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mensaje', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();

            $table->integer('id_persona_origen');
            $table->integer('id_persona_destino');
            $table->integer('id_adopcion');
            $table->text('mensaje');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mensaje');
	}

}
