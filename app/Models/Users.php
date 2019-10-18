<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Users extends Model
{
    public static function listar(){

        //buscando dados da tabela publicações e tipo de publicações
        $usuarios = DB::table('users')->select('*')->get();
        
        return $usuarios;
    }
}
