<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('persona', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();

            $table->text('id_fb');
            $table->text('nombre');
            $table->integer('edad');
            $table->binary('foto');
            $table->text('email');
            $table->boolean('activo')->default(true);
            $table->boolean('estado')->default(true);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('persona');
	}

}
