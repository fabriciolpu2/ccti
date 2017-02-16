<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTurma extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('turmas', function($table)
		{
			$table->increments('id');			
			$table->integer('curso_id')->nullable()->references('id')->on('cursos')->onDelete('cascade');;
			$table->integer('qtd_inscritos')->nullable();
			$table->boolean('inscricoes_abertas')->nullable();
			$table->date('data_inicio')->nullable();
			$table->date('data_fim')->nullable();
			$table->enum('turno', ['MATUTINO', 'VESPERTINO', 'NOTURNO', 'INTEGRAL'])->nullable();
			$table->string('nome')->nullable();
			$table->date('inicio_inscricao')->nullable();
			$table->date('fim_inscricao')->nullable();
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
