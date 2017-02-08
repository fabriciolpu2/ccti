@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 col-md-offset-0">
			<div class="panel panel-default">
				<div class="panel-heading">Cursos
					<div style="float: right; margin-top: -7px">
						<a href="{{action('CursoController@novo')}}" 
						class="btn btn-success" role="button">Novo</a></div>
					
				</div>

				<div class="panel-body">
					<table class="table">
						<th>Nome</th>
						<th>Categoria</th>
						<th>Vagas</th>
						<th>Carga Horaria</th>
						<th>Turmas</th>
						@foreach($cursos as $c)
						<tr>
							<td>{{$c->nome}}</td>
							<td>{{$c->categoria}}</td>
							<td>{{$c->vagas}}</td>
							<td>{{$c->cargahoraria}}</td>
							<td>
								<a href="/turmas/{{$c->id}}">
									<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
								</a>
							</td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
