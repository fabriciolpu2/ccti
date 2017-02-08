<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNumeroInscricao extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alunos_turmas', function(Blueprint $table)
		{

			$table->increments('numero_inscricao');			
			$table->integer('aluno_id');
			$table->integer('turma_id');
			$table->date('data_inscricao');
			$table->string('situacao');
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
