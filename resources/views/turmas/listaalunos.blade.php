@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					<table class="table">

						<th>Nome</th>
						<th>Numero Inscricao</th>
						<th>Data Inscrição</th>
						<th>Situação</th>
						<th>Turma</th>
						@foreach($alunos as $a)
						<tr>
							<td>{{$a->nome}}</td>
							<td>{{$a->pivot->numero_inscricao}}</td>
							<td>{{$a->pivot->data_inscricao}}</td>
							<td>{{$a->pivot->situacao}}</td>
							<td>{{$a->pivot->turma_id}}</td>
						</tr>
						
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
