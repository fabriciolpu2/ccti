@extends('app')

@section('content')
<div class="container">
	<div class="row">


				<div class="panel-body">
					
					<form action="/cursos/adiciona" method="post">
						<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />					
						<div class="form-group">
							<label>Nome</label>
							<input type="" name="nome" class="form-control" value="{{ old('nome')}}" />
						</div>
						<div class="form-group">
							<label>Categoria</label>
							<input type="" name="categoria" class="form-control" value="{{ old('categoria')}}" />
						</div>
						<div class="form-group">
							<label>Vagas</label>
							<input type="number" name="vagas" class="form-control" value="{{ old('vagas')}}" />
						</div>
						<div class="form-group">
							<label>Carga Horaria</label>
							<input type="number" name="cargahoraria" class="form-control" value="{{ old('cargahoraria')}}" />
						</div>

						<button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
					</form>
			
	</div>
</div>
@endsection
