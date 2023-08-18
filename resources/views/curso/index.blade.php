@extends('template.layout')

@section('content')
  <div class="row">
    <div class="col-lg-12 margin-tb">
      <div class="pull-left">
        <h2>Listagem de Cursos</h2>
      </div>
      <div class="pull-right">
        <a 
          href="{{ route('cursos.create') }}"
          class="btn btn-success"
        >
          Novo Curso
        </a>
      </div>
    </div>
  </div>

  @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p> {{ $message }} </p>
    </div>
  @endif

    <table class="table table-bordered">
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Sigla</th>
        <th>Tipo</th>
        <th width="40%">Opções</th>
      </tr>
      
      @foreach ($cursos as $curso)
        <tr>
          <td>{{ $curso->id }}</td>
          <td>{{ $curso->nome }}</td>
          <td>{{ $curso->sigla }}</td>
          <td>{{ $curso->tipo }}</td>
          <td>
            <form 
              action="{{ route('cursos.destroy', $curso->id) }}"
              method="POST"
            >
              <a 
                href="{{ route('cursos.show', $curso->id) }}"
                class="btn btn-info"  
              >
              Visualizar
              </a>
              <a 
                href="{{ route('cursos.edit', $curso->id) }}"
                class="btn btn-primary"
              >
              Editar
              </a>

              @csrf
              @method('DELETE')

              <button 
                type="submit" 
                class="btn btn-danger"
              >
                Excluir
              </button>
            </form>
          </td>
        </tr>
      @endforeach

    </table>

    {{ $cursos->links('pagination::bootstrap-4') }}    

@endsection