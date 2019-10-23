<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Alunos;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $alunos = Alunos::all();
        return view('admin.aluno.index', array('alunos' => $alunos, 'user' => $user));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        return view('admin.aluno.store', array('user' => $user));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $aluno = $request->except('_token');
        $aluno = Alunos::store($aluno);
        return redirect()->action('AlunosController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alunos  $alunos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user();

        $aluno = Alunos::find($id);

        return view('admin.aluno.show', array('aluno' => $aluno, 'user' => $user));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alunos  $alunos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();

        $aluno = Alunos::find($id);

        return view('admin.aluno.update', array('aluno' => $aluno, 'user' => $user));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alunos  $alunos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alunos $alunos)
    {
        $alunos = $request->except('_token');
        $id = $alunos['id'];  
        
        $aluno = Alunos::find($id);

        $aluno->nome = $alunos['nome'];
        $aluno->nascimento = $alunos['nascimento'];
        $aluno->parentesco = $alunos['parentesco'];
        $aluno->nomeResponsavel = $alunos['nomeResponsavel'];
        $aluno->emailResponsavel = $alunos['emailResponsavel'];
        $aluno->telefoneResponsavel = $alunos['telefoneResponsavel'];
        $aluno->save();
        
        return redirect()->action('AlunosController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alunos  $alunos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aluno = Alunos::find($id)->delete();

        return redirect()->action('AlunosController@index');
    }
}
