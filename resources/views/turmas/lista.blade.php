@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 col-md-offset-0">
			<div class="panel panel-default">
				<div class="panel-heading">Cursos
					<div style="float: right; margin-top: -7px">
						<a href="{{action('TurmaController@novo')}}" 
						class="btn btn-success" role="button">Novo</a></div>
					
				</div>


				<div class="panel-body">
					<table class="table">

						<th>Curso</th>
						<th>Turma</th>
						<th>Inicio</th>
						<th>Encerramento</th>
						<th>Turno</th>
						<th>Inscritos</th>
						<th>Periodo de Inscrições</th>
						<th>Inscrições</th>

						<th>Alunos</th>
						
						@foreach($turmas as $t)
						<tr>
							<td>{{$t->curso->nome}}</td>
							<td>{{$t->nome}}</td>
							<td>{{$t->data_inicio}}</td>
							<td>{{$t->data_fim}}</td>
							<td>{{$t->turno}}</td>
							<td>{{$t->qtd_inscritos}}</td>
							<td>{{$t->inicio_inscricao}} - {{$t->fim_inscricao}}</td>
							@if ($t->inscricoes_abertas == true) 
							<td>
								<a href="#" class="btn btn-success" role="button">Abertas</a>
							</td>							 
							@else 
							<td>
								<a href="#" class="btn btn-danger disabled" role="button">Encerradas</a>
							</td>
							@endif						
							<td>
								<a href="/turmas/alunos/{{$t->id}}">
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
