@extends('app')

@section('content')
<div class="container">
  <div class="row">

        <div class="panel-body">
        
        {{$aluno->nome}}
                
        </div>
        <div class="row">
              <div class="col-lg-12">
                  <h1 class="page-header">Cursos Concluidos</h1>
              </div>
              <!-- /.col-lg-12 -->
        </div>
        @foreach ($turmas as $turma)
        <div class="col-lg-4 col-md-6">
          <div class="panel panel-green">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-3">
                  <i class="fa fa-flag-checkered fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                  <div class="huge" style="font-size: 15px">{{$turma->curso->nome}} [{{$turma->curso->categoria}}]</div>
                  <div>{{$turma->nome}}</div>
                  <div style="font-size: 10px"> {{$turma->data_inicio}} à {{$turma->data_fim}}</div>
                  <div style="font-size: 15px"> {{$turma->curso->cargahoraria}}</div>
                </div>
              </div>
            </div>
            <a href="#">
              <div class="panel-footer">
                <span class="pull-left">View Details</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
              </div>
            </a>
          </div>
        </div>
        @endforeach
          
  </div>
</div>
@endsection
