<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Funcionarios;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;

class FuncionariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexSite()
    {
        $funcionarios = Funcionarios::all();

        return view('site.funcionario.index', array('funcionarios' => $funcionarios));
    }

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

        $nameFile = null;
 
        // Verifica se informou o arquivo e se é válido
        if ($request->hasFile('foto') && $request->file('foto')->isValid()) {

            $nome = uniqid(date('HisYmd'));
            
            // Extensão do arquivo
            $fileExtensao = $request->foto->extension();
            
            $file = $request->file('foto');

            // Define finalmente o nome
            $nameFile = "{$nome}.{$fileExtensao}";

            // Faz o upload:
            $upload = $file->storeAs('media/funcionarios', $nameFile);

            if ( !$upload )
            return redirect()
                        ->back()
                        ->with('error', 'Falha ao fazer upload')
                        ->withInput();

        }

        $funcionarios = $request->except('_token');
        $funcionarios['foto'] =  $nameFile;
        $funcionarios = Funcionarios::store($funcionarios);
        return redirect()->action('FuncionariosController@index');
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

        $funcionarios = $request->except('_token');
        $id = $funcionarios['id'];  

        $nameFile = null;
        $nameFileOld = $request->input('fotoOld');

        //verificar se há arquivo
        if ($request->hasFile('foto') && $request->file('foto')->isValid()) {

            $nome = uniqid(date('HisYmd'));
            
            // Extensão do arquivo
            $fileExtensao = $request->foto->extension();
            
            $file = $request->file('foto');

            // Define finalmente o nome
            $nameFile = "{$nome}.{$fileExtensao}";

            // Faz o upload:
            $upload = $file->storeAs('media/funcionarios', $nameFile);

            if ( !$upload ){
                return redirect()->action('FuncionariosController@edit', $id);
            }

            //deletar imagem antiga
            Storage::delete("media/funcionarios/{$nameFileOld}");
        }else{
            $nameFile = $nameFileOld;
        }

        $funcionario = Funcionarios::find($id);

        $funcionario->nome = $funcionarios['nome'];
        $funcionario->cargo = $funcionarios['cargo'];
        $funcionario->formacao = $funcionarios['formacao'];
        $funcionario->foto = $nameFile;
        $funcionario->save();

        return redirect()->action('FuncionariosController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Funcionarios  $funcionarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $funcionario = Funcionarios::find($id);
        Storage::delete("media/funcionarios/{$funcionario->foto}");

        Funcionarios::find($id)->delete();

        return redirect()->action('FuncionariosController@index');
    }
}
