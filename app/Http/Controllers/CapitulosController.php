<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Capitulos;
use App\Models\Documentos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CapitulosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('admin.capituloDoc.index', array('user' => $user));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {   
        $user = Auth::user();

        $documento = Documentos::find($id);

        return view('admin.capituloDoc.store', compact('documento', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $capitulo = $request->except('_token');

        $id = $capitulo['idDocumento'];

        $capitulo = Capitulos::store($capitulo);

        return redirect()->action('DocumentosController@show', $id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Capitulos  $capitulos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user();

        $capitulo = Capitulos::find($id);

        $documento = Documentos::find($capitulo->idDocumento);

        return view('admin.capituloDoc.show', compact('capitulo', 'documento', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Capitulos  $capitulos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();

        $capitulo = Capitulos::find($id);

        $documento = Documentos::find($capitulo->idDocumento);
        
        return view('admin.capituloDoc.update', compact('capitulo', 'documento', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Capitulos  $capitulos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $capitulos = $request->except('_token');
        $id = $capitulos['id'];

        $capitulo = Capitulos::find($id);
        
        $capitulo->titulo = $capitulos['titulo'];
        $capitulo->descricao = $capitulos['descricao'];
        $capitulo->idDocumento = $capitulos['idDocumento'];

        $capitulo->save();

        return redirect()->action('CapitulosController@show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Capitulos  $capitulos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $capitulos = Capitulos::find($id);
        $idDocumento = $capitulos->idDocumento;

        Capitulos::find($id)->delete();

        return redirect()->action('DocumentosController@show', $idDocumento);
    }
}
