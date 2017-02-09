<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarAlunos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alunos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('pessoa_id')->references('id')->on('pessoas')->onDelete('cascade');
			$table->string('email')->nullable();
			$table->string('escolaridade')->nullable();
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
		//
	}

}
