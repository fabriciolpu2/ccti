<?php namespace ccti;

use Illuminate\Database\Eloquent\Model;
use ccti\Curso;
use ccti\Turma;
use ccti\Aluno;

class AlunoTurma extends Model {

	protected $table = 'alunos_turmas';

	public function curso() {
		return $this->belongsTo('ccti\Curso');
	}
}
