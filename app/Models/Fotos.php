<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fotos extends Model
{
    protected $fillable = [
        'descricao',
        'arquivo',
        'idPublicacao'
    ];

    public static function store($fotos, $nameFile){

        $foto = new Fotos;

        $foto->descricao = $fotos['descricao'];
        $foto->arquivo = $nameFile;
        $foto->idPublicacao = $fotos['idPublicacao'];
        $foto->save();
    }
}
