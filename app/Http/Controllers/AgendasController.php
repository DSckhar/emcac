<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Agendas;

//model publicações
use App\Models\Publicacoes;
use Illuminate\Http\Request;

class AgendasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexSite()
    {   
        //buscando dados da tabela agenda
        $agendas = Agendas::all();

        //buscanda dados da tabela publicação
        $publicacoes = Publicacoes::all();

        return view('site.agenda.index', compact('agendas', 'publicacoes'));
    }

    public function index()
    {
        $user = Auth::user();

        //buscando dados da tabela agenda
        $agendas = Agendas::all();

        return view('admin.agenda.index', compact('agendas', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        return view('admin.agenda.store', array('user' => $user));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agenda = $request->except('_token');
        $agenda = Agendas::store($agenda);
        return redirect()->action('AgendasController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agendas  $agendas
     * @return \Illuminate\Http\Response
     */
    public function show(Agendas $agendas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agendas  $agendas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();

        //selecionando a agenda com base no id
        $agenda = Agendas::find($id);
        
        return view('admin.agenda.update', compact('agenda', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agendas  $agendas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $agendas = $request->except('_token');
        $id = $agendas['id'];

        $agenda = Agendas::find($id);
        
        $agenda->titulo = $agendas['titulo'];
        $agenda->descricao = $agendas['descricao'];
        $agenda->dInicio = $agendas['dInicio'];
        $agenda->dTermino = $agendas['dTermino'];
        $agenda->cor = $agendas['cor'];

        $agenda->save();

        return redirect()->action('AgendasController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agendas  $agendas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agenda = Agendas::find($id)->delete();

        return redirect()->action('AgendasController@index');
    }
}
