<?php namespace ccti;

use Illuminate\Database\Eloquent\Model;
use ccti\Aluno;
use ccti\Endereco;

class Pessoa extends Model {

	public $timestamps = true;
	public $fillable = array('nome', 'cpf', 'rg', 'ssp','nascimento', 'nacionalidade', 'naturalidade', 'foto', 'documento','endereco_id');
	protected $guarded = ['id'];

	public function aluno(){
		return $this->hasOne('ccti\Aluno');
	}
	
	public function endereco() {
		return $this->belongsTo('ccti\Endereco');
	}
}
