<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Documentos;
use App\Models\Capitulos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DocumentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $user = Auth::user();

        $documentos = Documentos::all()->sortByDesc('updated_at');

        return view('admin.documento.index', array('documentos' => $documentos, 'user' => $user));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        return view('admin.documento.store', array('user' => $user));
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
        if ($request->hasFile('arquivo') && $request->file('arquivo')->isValid()) {

            $nome = uniqid(date('HisYmd'));
            
            // Extensão do arquivo
            $fileExtensao = $request->arquivo->extension();
            
            $file = $request->file('arquivo');

            // Define finalmente o nome
            $nameFile = "{$nome}.{$fileExtensao}";

            // Faz o upload:
            $upload = $file->storeAs('media/arquivo', $nameFile);

            if ( !$upload )
            return redirect()
                        ->back()
                        ->with('error', 'Falha ao fazer upload')
                        ->withInput();
        }

        $documento = $request->except('_token');
        $documento['arquivo'] =  $nameFile;
        $documento = Documentos::store($documento);
        
        $documento = Documentos::all()->sortByDesc('created_at')->first();

        $id = $documento['id'];

        return redirect()->action('DocumentosController@show', $id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Documentos  $documentos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user();

        $documento = Documentos::find($id);

        $capitulos = Capitulos::all()->where('idDocumento', '=', $id);

        return view('admin.documento.show', array('documento' => $documento, 'capitulos' => $capitulos, 'user' => $user));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Documentos  $documentos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $user = Auth::user();
        
        //selecionando o documento com base no id
        $documento = Documentos::find($id);
        
        return view('admin.documento.update', compact('documento',  'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Documentos  $documentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $documentos = $request->except('_token');
        $id = $documentos['id'];

        $nameFile = null;
        $nameFileOld = $request->input('arquivoOld');

        //verificar se há arquivo
        if ($request->hasFile('arquivo') && $request->file('arquivo')->isValid()) {

            $nome = uniqid(date('HisYmd'));
            
            // Extensão do arquivo
            $fileExtensao = $request->arquivo->extension();
            
            $file = $request->file('arquivo');

            // Define finalmente o nome
            $nameFile = "{$nome}.{$fileExtensao}";

            // Faz o upload:
            $upload = $file->storeAs('media/arquivo', $nameFile);

            if ( !$upload ){
                return redirect()->action('DocumentosController@edit', $id);
            }

            //deletar imagem antiga
            Storage::delete("media/arquivo/{$nameFileOld}");
        }else{
            $nameFile = $nameFileOld;
        }

        //atualizar
        $documento = Documentos::find($id);
        
        $documento->titulo = $documentos['titulo'];
        $documento->ano = $documentos['ano'];
        $documento->arquivo = $nameFile;

        $documento->save();

        return redirect()->action('DocumentosController@show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Documentos  $documentos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $documento = Documentos::find($id);
        Storage::delete("media/arquivo/{$documento->arquivo}");

        $documento = Documentos::find($id)->delete();

        return redirect()->action('DocumentosController@index');  
    }
}
