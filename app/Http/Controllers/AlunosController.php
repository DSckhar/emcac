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
        return view('admin.aluno.store');
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
    public function show(Alunos $alunos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alunos  $alunos
     * @return \Illuminate\Http\Response
     */
    public function edit(Alunos $alunos)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alunos  $alunos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alunos $alunos)
    {
        //
    }
}
