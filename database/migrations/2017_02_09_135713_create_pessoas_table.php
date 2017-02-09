<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoasTable extends Migration {

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
			$table->string('nome');
			$table->string('cpf')->unique();
			$table->string('rg')->unique();
			$table->string('ssp');
			$table->string('nascimento');
			$table->string('nacionalidade');
			$table->string('naturalidade');
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
		Schema::drop('pessoas');
	}

}
