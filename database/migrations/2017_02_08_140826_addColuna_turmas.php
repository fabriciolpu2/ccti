<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColunaTurmas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('turmas', function($table)
		{
			$table->string('nome')->default("Sem Nome")->nullable();
			$table->date('inicio_inscricao')->nullable();
			$table->date('fim_inscricao')->nullable();
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
