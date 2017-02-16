<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarAlunosTurmas extends Migration {

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
			$table->integer('aluno_id')->references('id')->on('alunos')->onDelete('cascade');
			$table->integer('turma_id')->references('id')->on('turmas')->onDelete('cascade');
			$table->date('data_inscricao');
			$table->string('situacao');
			$table->boolean('concluido')->default('false')->nullable();
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
