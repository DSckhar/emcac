<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $user = Auth::user();
        $usuarios = Users::all();
        
        return view('admin.usuario.index', array('usuarios' => $usuarios, 'user' => $user));
    }

    public function administator($id)
    {
        $usuario = Users::find($id);

        $usuario->nivel = "2";
        $usuario->save();

        return redirect()->action('UsersController@index');
    }

    public function enable($id)
    {
        $usuario = Users::find($id);

        $usuario->nivel = "1";
        $usuario->save();

        return redirect()->action('UsersController@index');
    }

    public function disable($id)
    {
        $usuario = Users::find($id);

        $usuario->nivel = "0";
        $usuario->save();

        return redirect()->action('UsersController@index');
    }

    public function standard($id)
    {
        $usuario = Users::find($id);

        $usuario->nivel = "1";
        $usuario->save();

        return redirect()->action('UsersController@index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit(Users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Users $users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(Users $users)
    {
        //
    }
}
