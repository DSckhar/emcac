<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Turmas;
use App\Models\Alunos;
use App\Models\TurmaAlunos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TurmasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $turmas = Turmas::all();

        return view('admin.turma.index', array('turmas' => $turmas, 'user' => $user));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        return view('admin.turma.store', array('user' => $user));
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

        $turmas = $request->except('_token');
        $turmas = Turmas::store($turmas);
        return redirect()->action('TurmasController@index', array('user' => $user));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Turmas  $turmas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user();

        $turma = Turmas::find($id);

        return view('admin.turma.show', array('turma' => $turma, 'user' => $user));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Turmas  $turmas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();

        $turma = Turmas::find($id);

        return view('admin.turma.update', array('turma' => $turma, 'user' => $user));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Turmas  $turmas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = Auth::user();

        $turmas = $request->except('_token');
        $id = $turmas['id'];  

        $turma = Turmas::find($id);

        $turma->nome = $turmas['nome'];
        $turma->ano = $turmas['ano'];
        $turma->status = $turmas['status'];
        $turma->save(); 

        return redirect()->action('TurmasController@index', array('user' => $user));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Turmas  $turmas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Auth::user();

        $turma = Turmas::find($id)->delete();

        return redirect()->action('TurmasController@index', array('user' => $user));
    }
}
