<?php namespace ccti;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model {

	//
	public $timestamps = true;
	public $fillable = array('logradouro', 'numero', 'bairro', 'cidade', 'estado', 'cep');
	protected $guarded = ['id'];

}
