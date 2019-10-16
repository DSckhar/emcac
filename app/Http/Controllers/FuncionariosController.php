<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Funcionarios;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FuncionariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $user = Auth::user();

        $funcionarios = Funcionarios::all();

        return view('admin.funcionario.index', array('funcionarios' => $funcionarios, 'user' => $user));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        return view('admin.funcionario.store', array('user' => $user));
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

        $funcionarios = $request->except('_token');
        $funcionarios = Funcionarios::store($funcionarios);
        return redirect()->action('FuncionariosController@index', array('user' => $user));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Funcionarios  $funcionarios
     * @return \Illuminate\Http\Response
     */
    public function show(Funcionarios $funcionarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Funcionarios  $funcionarios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();

        $funcionario = Funcionarios::find($id);

        return view('admin.funcionario.update', array('funcionario' => $funcionario, 'user' => $user));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Funcionarios  $funcionarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = Auth::user();

        $funcionarios = $request->except('_token');
        $id = $funcionarios['id'];  
        
        $funcionario = Funcionarios::find($id);

        $funcionario->nome = $funcionarios['nome'];
        $funcionario->cargo = $funcionarios['cargo'];
        $funcionario->formacao = $funcionarios['formacao'];
        $funcionario->foto = $funcionarios['foto'];
        $funcionario->save();

        return redirect()->action('FuncionariosController@index', array('user' => $user));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Funcionarios  $funcionarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Auth::user();

        $funcionario = Funcionarios::find($id)->delete();

        return redirect()->action('FuncionariosController@index', array('user' => $user));
    }
}
