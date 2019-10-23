<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Turmas;
use App\Models\Alunos;
use App\Models\TurmaAlunos;
use Illuminate\Http\Request;

class TurmaAlunosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $turmaAlunos = TurmaAlunos::all();

        $turmas = Turmas::all();

        $alunos = Alunos::all();

        return view('admin.turmaAluno.index', array('turmaAlunos' => $turmaAlunos, 'turmas' => $turmas, 'user' => $user));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        $turmaAlunos = $request->except('_token');
        $turmaAlunos = TurmaAlunos::store($turmaAlunos);
        dd($turmaAlunos);
        return redirect()->action('TurmaAlunosController@index', array('user' => $user));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TurmaAlunos  $turmaAlunos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user();

        $turma = Turmas::find($id);
       
        $alunos = Alunos::all();
        
        return view('admin.turmaAluno.show', array('turma' => $turma, 'alunos' => $alunos, 'user' => $user));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TurmaAlunos  $turmaAlunos
     * @return \Illuminate\Http\Response
     */
    public function edit(TurmaAlunos $turmaAlunos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TurmaAlunos  $turmaAlunos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TurmaAlunos $turmaAlunos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TurmaAlunos  $turmaAlunos
     * @return \Illuminate\Http\Response
     */
    public function destroy(TurmaAlunos $turmaAlunos)
    {
        //
    }
}
