<?php namespace ccti;

use Illuminate\Database\Eloquent\Model;
use ccti\Turma;
use ccti\AlunoTurma;

class Aluno extends Model {

	//
	public $timestamps = true;
	
	public $fillable = array(
			'nome', 'email', 'cpf', 'rg', 'dataNascimento', 'grauInstrucao');

	protected $guarded = ['id'];

	public function turmas(){
		return $this->belongsToMany('ccti\Turma','alunos_turmas')->withPivot('numero_inscricao', 'turma_id', 'data_inscricao', 'situacao');		
	}
}
