@extends('app')

@section('content')
<div class="container">
  <div class="row">

        <div class="panel-body">
        
        {{$aluno->pessoa->nome}}
        <img src="/upload/img/perfil/{{ $aluno->pessoa->foto }}" style="width: 150px; height: 150px; border-radius: 50%">
                
        </div>
        
        @foreach ($turmas as $turma)

          @if($turma->pivot->concluido)
          <div class="row">
              <div class="col-lg-12">
                  <h1 class="page-header">Cursos Concluidos</h1>
              </div>
              <!-- /.col-lg-12 -->
          </div>

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
                    <div style="font-size: 15px"> {{$turma->curso->cargahoraria}} Horas</div>
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
          @else
            <div>
              <div class="row">
                <div class="col-lg-12">
                  <h1 class="page-header">Cursos em andamento</h1>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="panel panel-yellow">
                  <div class="panel-heading">
                    <div class="row">
                      <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i>
                      </div>
                      <div class="col-xs-9 text-right">
                        <div class="huge" style="font-size: 15px">{{$turma->curso->nome}} [{{$turma->curso->categoria}}]</div>
                        <div>{{$turma->nome}}</div>
                        <div style="font-size: 10px"> {{$turma->data_inicio}} à {{$turma->data_fim}}</div>
                        <div style="font-size: 15px"> {{$turma->curso->cargahoraria}} Horas</div>
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
            </div>
          @endif
        @endforeach
          
  </div>
</div>
@endsection
