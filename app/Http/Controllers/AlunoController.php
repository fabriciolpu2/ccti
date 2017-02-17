<?php namespace ccti\Http\Controllers;

use ccti\Http\Requests;
use ccti\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
//use Illuminate\Http\Request;

use Request;
use ccti\Aluno;
use ccti\Turma;
use ccti\Pessoa;
use ccti\Endereco;

use Image;

class AlunoController extends Controller {

	public function __construct()
    {
        $this->middleware('autorizar');
    }	

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

		//Endereco
		$endereco = Endereco::create($valores);
		$valores['endereco_id'] = $endereco->id;

		//Pessoa
		$p = Pessoa::create($valores, 'endereco_id');
		$valores['pessoa_id'] = $p->id;
		
		//Aluno
		//$turma = Request::input('turma_id');
		$turma = $valores['turma_id'];
		$situacao = $valores['situacao'];
		$observacao = $valores['observacao'];
		$data_inscricao = $data = date("d/m/Y"); 

		$aluno = Aluno::create($valores, 'pessoa_id')->turmas()->attach($turma, array('data_inscricao'=>$data_inscricao, 'situacao'=>$situacao, 'observacao'=>$observacao));
		
		//$aluno->turmas()->attach($turma->id);



		return redirect('/alunos')->withInput(Request::only('id'));
	}
	public function novo() {
		//Inscriçoes abertas
		$turmas = Turma::where('inscricoes_abertas', 1)->get();
		return view('alunos.novo')->with('turmas', $turmas);
	}


	/*public function listaTurmas($id) {
		$turmas = Aluno::find($id)->turmas;
		return view('turmas.lista')->with('turmas', $turmas);
	}*/
}
