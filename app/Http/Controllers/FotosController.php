<?php

namespace App\Http\Controllers;

use App\Models\Fotos;
//consultar publicações
use App\Models\Publicacoes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;

class FotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $publicacao = Publicacoes::find($id);

        return view('admin.foto.store', compact('publicacao'));
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
            $upload = $file->storeAs('media/fotos', $nameFile);

            if ( !$upload )
            return redirect()
                        ->back()
                        ->with('error', 'Falha ao fazer upload')
                        ->withInput();

        }

        $fotos = $request->except('_token');
        $id = $fotos['idPublicacao'];
        $fotos = Fotos::store($fotos, $nameFile);
        
        return redirect()->action('PublicacoesController@show', $id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fotos  $fotos
     * @return \Illuminate\Http\Response
     */
    public function show(Fotos $fotos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fotos  $fotos
     * @return \Illuminate\Http\Response
     */
    public function edit(Fotos $fotos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fotos  $fotos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fotos $fotos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fotos  $fotos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $foto = Fotos::find($id);
        Storage::delete("media/fotos/{$foto->arquivo}");

        $idPublicacao = $foto['idPublicacao'];

        $foto = Fotos::find($id)->delete();

        return redirect()->action('PublicacoesController@show', $idPublicacao);
    }
}
