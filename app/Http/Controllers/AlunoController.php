<?php namespace ccti\Http\Controllers;

use ccti\Http\Requests;
use ccti\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use ccti\Aluno;
use ccti\Turma;

class AlunoController extends Controller {

	public function listaJson(){
        $alunos = Aluno::all();
        return response()->json($alunos);        
	}

	public function index()
	{
		//
		$alunos = Aluno::all();
		//return 'Teste';
		return view('alunos.lista')->with('alunos', $alunos);
	}

	public function lista() {
		$alunos = Aluno::all();
		return view('alunos.lista')->with('alunos', $alunos);
	}

	public function detalhes($id) {
		$aluno = Aluno::find($id);
		$turmas = Aluno::find($id)->turmas;
		if(empty($aluno)) {
			return "Nothing";
		}
		return view('alunos.detalhes')->with('aluno', $aluno)->with('turmas', $turmas);
	}

	public function listaTurmas($id) {
		$turmas = Aluno::find($id)->turmas;
		return view('turmas.lista')->with('turmas', $turmas);
	}
}
