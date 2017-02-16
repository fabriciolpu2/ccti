<?php namespace ccti\Http\Controllers;

use ccti\Http\Requests;
use ccti\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
//use Illuminate\Http\Request;

use Request;
use ccti\Aluno;
use ccti\Turma;
use ccti\Pessoa;

use Image;

class AlunoController extends Controller {

	public function listaJson(){
        $alunos = Aluno::all();
        return response()->json($alunos);        
	}


	public function lista() {
		$alunos = Aluno::all();
		return view('alunos.lista')->with('alunos', $alunos);
	}

	public function detalhes($id) {
		$aluno = Aluno::find($id);
		//$turmas = Aluno::find($id)->turmas->where('curso_id', 1);
		$turmas = Aluno::find($id)->turmas;
		if(empty($aluno)) {
			return "Nothing";
		}
		return view('alunos.detalhes')->with('aluno', $aluno)->with('turmas', $turmas);
	}

	public function add() {
 		$valores = Request::all();
 		
 		$documento = Request::file('documento');
 		$destinationPath = public_path('/upload/');
        $nomeDocumento = $documento->getClientOriginalName();
        $documento->move($destinationPath, $nomeDocumento);
        

        //Foto
        $foto = Request::file('foto');
 		$nomefoto = $foto->getClientOriginalName();		
		Image::make($foto)->save( public_path('/upload/img/perfil/' . $nomefoto ));

		$valores['documento'] = $nomeDocumento;
		$valores['foto'] = $nomefoto;
		$p = Pessoa::create($valores);
		$valores['pessoa_id'] = $p->id;
		
		Aluno::create($valores, 'pessoa_id');

		return redirect('/alunos')->withInput(Request::only('id'));
	}
	public function novo() {
		return view('alunos.novo');
	}


	/*public function listaTurmas($id) {
		$turmas = Aluno::find($id)->turmas;
		return view('turmas.lista')->with('turmas', $turmas);
	}*/
}
