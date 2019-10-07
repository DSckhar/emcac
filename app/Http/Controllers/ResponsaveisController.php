<?php

namespace App\Http\Controllers;

use App\Models\Responsaveis;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResponsaveisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.responsavel.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.responsavel.store');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $responsaveis = $request->except('_token');
        $responsaveis = Responsaveis::store($responsaveis);
        return redirect()->action('ResponsaveisController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Responsaveis  $responsaveis
     * @return \Illuminate\Http\Response
     */
    public function show(Responsaveis $responsaveis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Responsaveis  $responsaveis
     * @return \Illuminate\Http\Response
     */
    public function edit(Responsaveis $responsaveis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Responsaveis  $responsaveis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Responsaveis $responsaveis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Responsaveis  $responsaveis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Responsaveis $responsaveis)
    {
        //
    }
}
