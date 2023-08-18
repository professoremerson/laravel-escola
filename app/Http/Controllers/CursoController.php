<?php

namespace App\Http\Controllers;

// importando o model Curso
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // recuperando todos os cursos do banco e
        // definindo uma paginação para a tabela de resultados
        $cursos = Curso::paginate(10);
        // retornando a view com a listagem para o usuário
        return view('curso.index', compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // retornando a tela para o cadastro de
        // um novo curso
        return view('curso.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validando os dados do formulário
        $request->validate([
            'nome' => 'required',
            'sigla' => 'required',
            'tipo' => 'required'
        ]);

        // salvando os dados na tabela do banco
        Curso::create($request->all());

        // depois de salvar redirecionar para a 
        // tela de listagem
        return redirect()
            ->route('cursos.index')
            ->with('success', 'Curso salvo com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // recuperando os dados do curso selecionado
        $curso = Curso::find($id);
        // exibindo a tela com os dados
        return view('curso.show', compact('curso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // recuperando os dados do registro
        // que será editado/alterado
        $curso = Curso::findOrFail($id);
        // retornando a tela de edição
        return view('curso.edit', compact('curso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // recuperando o registro do banco
        $curso = Curso::findOrFail($id);

        // validando os dados que estão sendo
        // enviados a partir do formulário para
        // a atualização
        $request->validate([
            'nome' => 'required',
            'sigla' => 'required',
            'tipo' => 'required'
        ]);

        // realizando a atualização do objeto
        $curso->update($request->all());

        // redirecionando para a página de 
        // listagem dos cursos
        return redirect()
            ->route('cursos.index')
            ->with('success', 'Curso atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // recuperando o objeto com o id fornecido
        // como parâmetro
        $curso = Curso::find($id);

        // excluindo o objeto
        $curso->delete();

        // redirecionando para a página de 
        // listagem dos cursos
        return redirect()
            ->route('cursos.index')
            ->with('success', 'Curso excluído com sucesso!');
    }
}
