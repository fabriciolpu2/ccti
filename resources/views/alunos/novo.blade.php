@extends('app')

@section('content')
<div class="container">
	<div class="row">
				<div class="panel-body">					
					<form action="/alunos/add" method="post" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

						<div class="panel panel-default">
  							<div class="panel-heading">Dados Pessoais</div>
  							<div class="panel-body">

								<div class="col-xs-12 col-lg-6">
									<label for="nome">NOME</label>
									<input name="nome" class="form-control" value="{{ old('nome')}}" />							
								</div>
								<div class="col-xs-12 col-lg-2">
									<label for="cpf">CPF</label>
									<input name="cpf" class="form-control" value="{{ old('cpf')}}" />
								</div>
								<div class="col-xs-12 col-lg-2">
									<label>RG</label>
									<input name="rg" class="form-control" value="{{ old('rg')}}" />
								</div>
								<div class="col-xs-12 col-lg-2">
									<label>SSP</label>
									<input name="ssp" class="form-control" value="{{ old('ssp')}}" />
								</div>
								<div class="col-xs-12 col-lg-2">
									<label>NASCIMENTO</label>
									<input name="nascimento" class="form-control" value="{{ old('nascimento')}}" />
								</div>
								<div class="col-xs-12 col-lg-2">
									<label>NACIONALIDADE</label>
									<input name="nacionalidade" class="form-control" value="{{ old('nacionalidade')}}" />
								</div>
								<div class="col-xs-12 col-lg-2">
									<label>NATURALIDADE</label>
									<input name="naturalidade" class="form-control" value="{{ old('naturalidade')}}" />
								</div>
								<div class="col-xs-12 col-lg-2">
									<label>ESCOLARIDADE</label>
									<input name="escolaridade" class="form-control" value="{{ old('escolaridade')}}" />
								</div>
							</div>
						</div>
						<div class="panel panel-default">
  							<div class="panel-heading">Endereço</div>
  							<div class="panel-body">

								<div class="col-xs-12 col-lg-2">
									<label>LOGRADOURO</label>
									<input name="logradouro" class="form-control" value="{{ old('logradouro')}}" />
								</div>
								<div class="col-xs-12 col-lg-2">
									<label>NUMERO</label>
									<input name="numero" class="form-control" value="{{ old('numero')}}" />
								</div>
								<div class="col-xs-12 col-lg-2">
									<label>BAIRRO</label>
									<input name="bairro" class="form-control" value="{{ old('bairro')}}" />
								</div>
								<div class="col-xs-12 col-lg-2">
									<label>CIDADE</label>
									<input name="cidade" class="form-control" value="{{ old('cidade')}}" />
								</div>
								<div class="col-xs-12 col-lg-2">
									<label>ESTADO</label>
									<input name="estado" class="form-control" value="{{ old('estado')}}" />
								</div>
								<div class="col-xs-12 col-lg-2">
									<label>CEP</label>
									<input name="cep" class="form-control" value="{{ old('cep')}}" />							
								</div>	
							</div>
						</div>


						<div class="panel panel-default">
  							<div class="panel-heading">Contato e Documentos</div>
  							<div class="panel-body">

								<div class="col-xs-12 col-lg-4">
									<label>CELULAR</label>
									<input name="tel_celular" class="form-control" value="{{ old('tel_celular')}}" />
								</div>
								
								<div class="col-xs-12 col-lg-4">
									<label>RESIDENCIAL</label>
									<input name="tel_residencial" class="form-control" value="{{ old('tel_residencial')}}" />
								</div>

								<div class="col-xs-12 col-lg-4">
									<label>TELEFONE + </label>
									<input name="tel_opcional" class="form-control" value="{{ old('tel_opcional')}}" />
								</div>

								<div class="col-xs-12 col-lg-4">
									<label>EMAIL</label>
									<input name="email" class="form-control" value="{{ old('email')}}" />
								</div>								
							</div>
							<div class="panel-body">
								<div class="col-xs-12 col-lg-5">
									<label>FOTO</label>
									<input type="file" name="foto"/>							
								</div>
							
								<div class="col-xs-12 col-lg-2">
									<label>DOCUMENTO</label>
									<input type="file" name="documento">	
								</div>
							</div>
						</div>
						



						<button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
					</form>
			
	</div>
</div>
@endsection
