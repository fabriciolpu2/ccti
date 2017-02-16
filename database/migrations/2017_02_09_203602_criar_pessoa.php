<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarPessoa extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pessoas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nome')->nullable();
			$table->string('cpf', 14)->unique();
			$table->string('rg')->nullable();
			$table->string('ssp')->nullable();
			$table->date('nascimento')->nullable();
			$table->string('nacionalidade')->nullable();
			$table->string('naturalidade')->nullable();
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
