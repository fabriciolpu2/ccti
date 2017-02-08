<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use ccti\Curso;
use ccti\Turma;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		//$this->call('CursoTableSeeder');
		$this->call('TurmaTableSeeder');

		// $this->call('UserTableSeeder');
	}

}

Class CursoTableSeeder extends Seeder {

	public function run() {
		Curso::create(['nome' => 'Unity', 'categoria'=>'Estalo', 'vagas'=>'20', 'cargahoraria'=>'20 Horas']);
		Curso::create(['nome' => 'Android', 'categoria'=>'Estalo', 'vagas'=>'25', 'cargahoraria'=>'20 Horas']);
	}
}
							

Class TurmaTableSeeder extends Seeder {
	public function run() {
		Turma::create(['curso_id'=>'1', 'data_inicio'=>'2017-05-12', 'data_fim'=>'2017-06-15', 'turno'=>'MATUTINO', 'qtd_inscritos'=>'10', 'inscricoes_abertas'=> 'true']);
		Turma::create(['curso_id'=>'2', 'data_inicio'=>'2017-04-01', 'data_fim'=>'2017-04-20', 'turno'=>'VESPERTINO', 'qtd_inscritos'=>'10', 'inscricoes_abertas'=> 'true' ]);
		Turma::create(['curso_id'=>'2', 'data_inicio'=>'2017-04-01', 'data_fim'=>'2017-04-20', 'turno'=>'VESPERTINO', 'qtd_inscritos'=>'10', 'inscricoes_abertas'=> 'false' ]);
	}
}
