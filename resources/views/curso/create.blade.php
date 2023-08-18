@extends('template.layout')
  
@section('content')
<div class="row">
  <div class="col-lg-12 margin-tb">
      <div class="pull-left">
          <h2>Adicionar Novo Curso</h2>
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
   
<form action="{{ route('cursos.store') }}" method="POST">
  @csrf

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Nome:</strong>
          <input type="text" name="nome" class="form-control" placeholder="Nome">
        </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Sigla:</strong>
          <input type="text" name="sigla" class="form-control" placeholder="Sigla">
        </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Tipo:</strong>
          <input type="text" name="tipo" class="form-control" placeholder="Tipo">
        </div>
      </div>
      
      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
  </div>
   
</form>
@endsection