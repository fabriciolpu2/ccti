<?php namespace ccti;

use Illuminate\Database\Eloquent\Model;
use ccti\Turma;

class Curso extends Model {

	//
	public $timestamps = true;
	public $fillable = array('nome', 'categoria', 'vagas', 'cargahoraria');

	protected $guarded = ['id'];
	

	// Um Curso para Muitas Turmas
	public function turmas() {
		return $this->hasMany('ccti\Turma');
	}

}
