@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Alunos
					<div style="float: right; margin-top: -7px">
						<a href="{{action('AlunoController@novo')}}" 
						class="btn btn-success" role="button">Novo</a></div>
					
				</div>

				<div class="panel-body">
					<table class="table">
						<th>Nome</th>
						<th>Email</th>
						<th>Data Nascimento</th>
						<th>CPF</th>
						<th>Ações</th>
						
						@foreach($alunos as $a)
							<tr>
								<td>{{$a->pessoa->nome}}</td>
								<td>{{$a->email}}</td>
								<td>{{$a->pessoa->nascimento}}</td>
								<td>{{$a->pessoa->cpf}}</td>
								<td>
									<a href="/alunos/{{$a->id}}">
										<span class="glyphicon glyphicon-search" aria-hidden="true" />								
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
