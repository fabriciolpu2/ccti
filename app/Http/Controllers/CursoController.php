<?php namespace ccti\Http\Controllers;

//use ccti\Http\Requests;
use ccti\Http\Controllers\Controller;

use Request;
//use Illuminate\Http\Request;
use ccti\Curso;
use ccti\Turma;

class CursoController extends Controller {

	public function __construct()
    {
        $this->middleware('autorizar');
    }	

	public function lista() {

		$cursos = Curso::all();
		return view('cursos.lista')->with('cursos', $cursos);
	}
	public function listaTurmas($id) {
		$turmas = Curso::find($id)->turmas;
		if(empty($turmas)) {
			return "Nenhuma Turma Disponivel";
		}
		return view('turmas.lista')->with('turmas', $turmas);
	}
	public function novo() {
		return view('cursos.novocurso');
	}

	public function adiciona(){
		Curso::create(Request::all());
		return redirect('/cursos')->withInput(Request::only('nome'));
	}

	
}
