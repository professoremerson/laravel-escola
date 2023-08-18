@extends('template.layout')

@section('content')
  <div class="row">
    <div class="col-lg-12 margin-tb">
      <div class="pull-left">
          <h2> Mostrar Curso</h2>
      </div>
      <div class="pull-right">
          <a class="btn btn-primary" href="{{ route('cursos.index') }}"> Voltar </a>
      </div>
    </div>
  </div>
   
  <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Nome:</strong>
              {{ $curso->nome }}
          </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Sigla:</strong>
            {{ $curso->sigla }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
          <strong>Tipo:</strong>
          {{ $curso->tipo }}
      </div>
    </div>
      
  </div>
@endsection