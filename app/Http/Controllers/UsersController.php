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

    public function profile()
    {
        $user = Auth::user();

        if ($user['nivel'] == '1') {
            $user['tipo'] = 'Padrão';
        }elseif($user['nivel'] == '2') {
            $user['tipo'] = 'Adminstrador';
        }
        return view('admin.usuario.update', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit()
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
    public function update(Request $request)
    {
        $user = $request->except('_token');
        $id = $user['id'];  
        $users = Users::find($id);

        $usuarios = Users::all()->where('id', '!=', $id)->where('email', '=', $user['email']);

        if (count($usuarios) > 0 ) {
            return back()->with('mensagem', 'E-Mail já cadastrados para um usuário!');
        }else{
            $users->name = $user['name'];
            $users->email = $user['email'];
            $users->save();
        
            return redirect()->action('UsersController@profile');
        }
        
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
