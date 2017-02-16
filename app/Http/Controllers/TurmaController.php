<?php namespace ccti\Http\Controllers;

//use ccti\Http\Requests;
use ccti\Http\Controllers\Controller;
use Request;
//use Illuminate\Http\Request;
use ccti\Turma;
use ccti\Aluno;
use ccti\Curso;

class TurmaController extends Controller {

	public function __construct()
    {
        $this->middleware('autorizar');
    }	


	public function lista(){

		$turmas = Turma::all();
		return view('turmas.lista')->with('turmas',$turmas);
	}

	public function listaAlunos($id) {
		$alunos = Turma::find($id)->alunos;
/*		$turma = Turma::find(1);

		$alunos->turmas()->attach($turma);
		*/
		return view('alunos.')->with('alunos', $alunos);
	}

	public function novo(){
		return view ('turmas.novaturma')->with('cursos', Curso::all());
	}

	public function adiciona(){
		Turma::create(Request::all());
		return redirect('/turmas')->withInput(Request::only('nome'));
	}

}
