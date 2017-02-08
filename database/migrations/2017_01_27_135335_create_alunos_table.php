<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunosTable extends Migration {

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
			$table->string('nome');
			$table->string('email');
			$table->string('cpf')->unique();
			$table->string('rg')->unique();
			$table->string('dataNascimento');
			$table->string('grauInstrucao');
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
		Schema::drop('alunos');
	}

}
