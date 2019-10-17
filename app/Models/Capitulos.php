<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Capitulos extends Model
{
    protected $fillable = [
        'titulo',
        'descricao',
        'idDocumento'
    ];

    public static function store($capitulos){

        $capitulo = new Capitulos;

        $capitulo->titulo = $capitulos['titulo'];
        $capitulo->descricao = $capitulos['descricao'];
        $capitulo->idDocumento = $capitulos['idDocumento'];
        $capitulo->save();
    }
}
