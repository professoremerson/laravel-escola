@extends('template.layout')
   
@section('content')
    <div class="row">
      <div class="col-lg-12 margin-tb">
        <div class="pull-left">
          <h2>Editar Curso</h2>
        </div>
        <div class="pull-right">
          <a class="btn btn-primary" href="{{ route('cursos.index') }}"> Voltar </a>
        </div>
      </div>
    </div>
   
    @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Erro!</strong> <br>
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
  
    <form action="{{ route('cursos.update',$curso->id) }}" method="POST">
      @csrf
      @method('PUT')
  
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                <input type="text" name="nome" value="{{ $curso->nome }}" class="form-control" placeholder="Nome">
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sigla:</strong>
                <input type="text" name="sigla" value="{{ $curso->sigla }}" class="form-control" placeholder="Sigla">
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipo:</strong>
                <input type="text" name="tipo" value="{{ $curso->tipo }}" class="form-control" placeholder="Tipo">
            </div>
          </div>
          
          <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary"> Alterar </button>
          </div>
      </div>
   
    </form>
@endsection