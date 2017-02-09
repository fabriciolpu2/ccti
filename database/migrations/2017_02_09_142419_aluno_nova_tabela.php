<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlunoNovaTabela extends Migration {

	public function up()
	{
		Schema::create('alunos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('pessoa_id');
			$table->string('email');
			$table->string('escolaridade');
			$table->timestamps();
		});
	}
	
	public function down()
	{
		Schema::table('alunos', function(Blueprint $table)
		{
			//
		});
	}

}
