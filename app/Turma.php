<?php namespace ccti;

use Illuminate\Database\Eloquent\Model;
use ccti\Curso;
use ccti\Aluno;
use ccti\AlunoTurma;

class Turma extends Model {

	public $timestamps = true;
	public $fillable = array('curso_id','data_inicio','data_fim', 'turno', 'qtd_inscritos', 'inscricoes_abertas','nome','inicio_inscricao', 'fim_inscricao');

	protected $guarded = ['id'];

	// Um 
	public function curso() {
		return $this->belongsTo('ccti\Curso');
	}

	public function alunos() {
		return $this->belongsToMany('ccti\Aluno','alunos_turmas')->withPivot('numero_inscricao', 'turma_id', 'data_inscricao', 'situacao','concluido','observacao')->withTimestamps();
	}


	/*public function alunos() {
		return $this->hasManyThrough('ccti\Aluno','ccti\Curso', 'alunos_turmas');
	}*/

}
