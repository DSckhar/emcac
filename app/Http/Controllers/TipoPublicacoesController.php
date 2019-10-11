<?php

namespace App\Http\Controllers;

use App\Models\TipoPublicacoes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TipoPublicacoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoPublicacoes = TipoPublicacoes::all();

        return view('admin.tipoPublicacao.index', array('tipopublicacoes' => $tipoPublicacoes));
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
        $tipopublicacoes = $request->except('_token');
        $tipopublicacoes = TipoPublicacoes::store($tipopublicacoes);
        return redirect()->action('TipoPublicacoesController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoPublicacoes  $tipoPublicacoes
     * @return \Illuminate\Http\Response
     */
    public function show(TipoPublicacoes $tipoPublicacoes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoPublicacoes  $tipoPublicacoes
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoPublicacoes $tipoPublicacoes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoPublicacoes  $tipoPublicacoes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoPublicacoes $tipoPublicacoes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoPublicacoes  $tipoPublicacoes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipoPublicacao = TipoPublicacoes::find($id)->delete();

        return redirect()->action('TipoPublicacoesController@index');
    }
}
