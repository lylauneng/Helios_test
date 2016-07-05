<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLivresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('livres', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('titre');
			$table->string('auteur');
			$table->string('edition');
			$table->integer('annee');
			$table->string('code_auteur');
			$table->string('genre');
			$table->string('langue');
		})
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('livres');
	}

}
