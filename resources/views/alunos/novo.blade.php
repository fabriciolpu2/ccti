@extends('app')

@section('content')
<div class="container">
	<div class="row">
				<div class="panel-body">					
					<form action="/alunos/add" method="post" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

						<div class="form-group">
							<label>Nome</label>
							<input name="nome" class="form-control" value="{{ old('nome')}}" />
							<label>cpf</label>
							<input name="cpf" class="form-control" value="{{ old('cpf')}}" />
						</div>
						<div class="form-group">
							
						</div>
						<div class="form-group">
							<label>rg</label>
							<input name="rg" class="form-control" value="{{ old('rg')}}" />
						</div>
						<div class="form-group">
							<label>ssp</label>
							<input name="ssp" class="form-control" value="{{ old('ssp')}}" />
						</div>
						<div class="form-group">
							<label>nascimento</label>
							<input name="nascimento" class="form-control" value="{{ old('nascimento')}}" />
						</div>
						<div class="form-group">
							<label>nacionalidade</label>
							<input name="nacionalidade" class="form-control" value="{{ old('nacionalidade')}}" />
						</div>
						<div class="form-group">
							<label>naturalidade</label>
							<input name="naturalidade" class="form-control" value="{{ old('naturalidade')}}" />
						</div>
						<div class="form-group">
							<label>E-mail</label>
							<input name="email" class="form-control" value="{{ old('email')}}" />
						</div>
						<div class="form-group">
							<label>Escolaridade</label>
							<input name="escolaridade" class="form-control" value="{{ old('escolaridade')}}" />
						</div>
						<div class="form-group">
							<label>Foto</label>
							<input type="file" name="foto"/>
							<label>Documento</label>
							<input type="file" name="documento">
						</div>
						<div class="form-group">
							
						</div>



						<button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
					</form>
			
	</div>
</div>
@endsection
