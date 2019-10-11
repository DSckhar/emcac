<?php

namespace App\Http\Controllers;

use App\Models\Publicacoes;

//model fotos
use App\Models\Fotos;

//model tipo de publicações
use App\Models\TipoPublicacoes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//arquivo
use Illuminate\Support\Facades\Storage;

class PublicacoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexSite()
    {
        //buscando dados da tabela agenda
        $publicacoes = Publicacoes::all();

        $tipos = TipoPublicacoes::all();

        return view('site.publicacao.index', compact('publicacoes', 'tipos'));
    }

    public function showSite($id)
    {
        //buscando dados da tabela publicação
        $publicacao = Publicacoes::find($id);

        $fotos = Fotos::all()->where('idPublicacao', '=', $id);

        $tipo = TipoPublicacoes::find($publicacao->idTipoPublicacao);

        return view('site.publicacao.show', compact('publicacao', 'fotos', 'tipo'));
    }
    
    public function index()
    {
        
        $publicacoes = Publicacoes::listar();

        return view('admin.publicacao.index', compact('publicacoes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos = TipoPublicacoes::all();
        return view('admin.publicacao.store', compact('tipos'));
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
                return redirect()->action('PublicacoesController@create');
        }

        $publicacaoes = $request->except('_token');
        $publicacaoes = Publicacoes::store($publicacaoes, $nameFile);

        return redirect()->action('PublicacoesController@show', $publicacaoes->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publicacoes  $publicacoes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $publicacao = Publicacoes::find($id);

        $fotos = Fotos::all()->where('idPublicacao', '=', $id);

        $tipo = TipoPublicacoes::find($publicacao->idTipoPublicacao);

        return view('admin.publicacao.show', compact('publicacao', 'fotos', 'tipo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Publicacoes  $publicacoes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //selecionando a agenda com base no id
        $publicacoes = Publicacoes::find($id);

        $tipos = TipoPublicacoes::all();
        
        return view('admin.publicacao.update', compact('publicacoes', 'tipos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Publicacoes  $publicacoes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $nameFile = null;
        $nameFileOld = $request->input('arquivoOld');
        //verificar se há imagem
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
                return redirect()->action('PublicacoesController@create');
            }

            //deletar imagem antiga
            Storage::delete("media/arquivo/{$nameFileOld}");
        }else{
            $nameFile = $nameFileOld;
        }

        //atualizar
        $publicacoes = $request->except('_token');
        $id = $publicacoes['id'];

        $publicacao = Publicacoes::find($id);
        
        $publicacao->titulo = $publicacoes['titulo'];
        $publicacao->descricao = $publicacoes['descricao'];
        $publicacao->idTipoPublicacao = $publicacoes['idTipoPublicacao'];
        $publicacao->dInicio = $publicacoes['dInicio'];
        $publicacao->dTermino = $publicacoes['dTermino'];
        $publicacao->hInicio = $publicacoes['hInicio'];
        $publicacao->hTermino = $publicacoes['hTermino'];
        $publicacao->arquivo = $nameFile;

        $publicacao->save();

        return redirect()->action('PublicacoesController@show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publicacoes  $publicacoes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $publicacao = Publicacoes::find($id);
        Storage::delete("media/arquivo/{$publicacao->arquivo}");

        $publicacao = Publicacoes::find($id)->delete();

        return redirect()->action('PublicacoesController@index');
    }
}
