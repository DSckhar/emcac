<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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
    public function indexSite($idTipoPublicacao = null)
    {   
        $tipos = TipoPublicacoes::all();

        if($idTipoPublicacao == null){
            
            //buscando todos dados da tabela publicacao
            $publicacoes = Publicacoes::all();
            
        }else{
            //buscando dados da tabela publicacao pelo id de tipo
            $publicacoes = Publicacoes::listarPeloTipo($idTipoPublicacao);
        }

        //selecionando fotos
        foreach($publicacoes as $key => $publicacao){
            $publicacao->foto = null;
            $fotos = fotos::listarIdPublicacoes($publicacao->id);
            foreach($fotos as $foto){
                $publicacao->foto =  $foto->foto;
            }
        }
        
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
        $user = Auth::user();
        $publicacoes = Publicacoes::listar();

        return view('admin.publicacao.index', compact('publicacoes', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $tipos = TipoPublicacoes::all();
        return view('admin.publicacao.store', compact('tipos', 'user'));
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
        $user = Auth::user();

        $publicacao = Publicacoes::find($id);

        $fotos = Fotos::all()->where('idPublicacao', '=', $id);

        $tipo = TipoPublicacoes::find($publicacao->idTipoPublicacao);

        return view('admin.publicacao.show', compact('publicacao', 'fotos', 'tipo', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Publicacoes  $publicacoes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();

        //selecionando a publicacoes com base no id
        $publicacoes = Publicacoes::find($id);

        $tipos = TipoPublicacoes::all();
        
        return view('admin.publicacao.update', compact('publicacoes', 'tipos', 'user'));
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
