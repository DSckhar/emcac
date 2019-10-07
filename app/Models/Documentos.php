<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Documentos extends Model
{
    protected $fillable = [
        'titulo',
        'ano',
        'arquivo'
    ];

    public static function store($documentos){

        $documento = new Documentos;

        $documento->titulo = $documentos['titulo'];
        $documento->ano = $documentos['ano'];
        $documento->arquivo = $documentos['arquivo'];
        $documento->save();
    }
}
