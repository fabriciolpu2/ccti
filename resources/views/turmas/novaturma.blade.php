@extends('app')

@section('content')

<div class="container">
	<div class="row">
		<div class="panel-body">
			<form action="/turmas/adiciona" method="POST">
				<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

				<div class="form-group">
					<label>Curso</label>
					<select name="curso_id" class="form-control" value="{{ old('curso_id')}}">
						@foreach($cursos as $c)
						<option value="{{$c->id}}">{{$c->nome}}</option>
						@endforeach

					</select>
				</div>
				<div class="form-group">
					<label>Nome</label>
					<input type="" name="nome" class="form-control" value="{{ old('nome')}}" placeholder="Nome">
				</div>
				<div class="form-group">
					<label>Inicio do Curso</label>
					<input type="date" name="data_inicio" class="form-control" value="{{ old('data_inicio')}}">
				</div>
				<div class="form-group">
					<label>Final do Curso</label>
					<input type="date" name="data_fim" class="form-control" value="{{ old('data_fim')}}">
				</div>
				<div class="form-group">
					<label>Turno</label>
					<select name="turno" class="form-control" value="{{ old('turno')}}">
						<option value="MATUTINO">MATUTINO</option>
						<option value="VESPERTINO">VESPERTINO</option>
						<option value="NOTURNO">NOTURNO</option>
						<option value="INTEGRAL">INTEGRAL</option>
					</select>
				</div>
				
				<div class="form-group">
					<label>Inicio das Inscriçoes</label>
					<input type="date" name="inicio_inscricao" class="form-control" value="{{ old('inicio_inscricao')}}">
				</div>
				<div class="form-group">
					<label>Final das Inscriçoes</label>
					<input type="date" name="fim_inscricao" class="form-control" value="{{ old('fim_inscricao')}}">
				</div>
				<div class="form-group" data-toggle="buttons">
					<label>Inscrições</label><br>
					<label class="btn btn-success" active>
						<input type="radio" name="inscricoes_abertas" value="true" autocomplete="off" checked>Abertas
					</label>
					<label class="btn btn-danger">
						<input type="radio" name="inscricoes_abertas" value="false" autocomplete="off" checked>Encerradas
					</label>					
				</div>

				<button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
			</form>
		</div>

	</div>
</div>

@endsection