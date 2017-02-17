<?php namespace ccti;

use Illuminate\Database\Eloquent\Model;
use ccti\Turma;
use ccti\AlunoTurma;
use ccti\Pessoa;

class Aluno extends Model {

	//
	public $timestamps = true;
	
	public $fillable = array(
			'pessoa_id', 'email', 'escolaridade', 'tel_celular', 'tel_residencial', 'tel_opcional');

	protected $guarded = ['id'];

	public function pessoa() {
		return $this->belongsTo('ccti\Pessoa');
	}

	public function turmas(){
		return $this->belongsToMany('ccti\Turma','alunos_turmas')->withPivot('numero_inscricao', 'turma_id', 'data_inscricao', 'situacao', 'concluido','observacao')->withTimestamps();		
	}
}
 