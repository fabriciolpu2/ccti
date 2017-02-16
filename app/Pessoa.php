<?php namespace ccti;

use Illuminate\Database\Eloquent\Model;
use ccti\Aluno;

class Pessoa extends Model {

	public $timestamps = true;
	public $fillable = array('nome', 'cpf', 'rg', 'ssp','nascimento', 'nacionalidade', 'naturalidade', 'foto', 'documento');
	protected $guarded = ['id'];

	public function aluno(){
		return $this->hasOne('ccti\Aluno');
	}
}
