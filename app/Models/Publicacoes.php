<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publicacoes extends Model
{
    protected $fillable = [
        'titulo',
        'dInicio',
        'dTermino',
        'hInicio',
        'hTermino',
        'tipo',
        'descricao'
    ];

    public static function store($publicacoes){

        $publicacao = new Publicacoes;

        $publicacao->titulo = $publicacoes['titulo'];
        $publicacao->dInicio = $publicacoes['dInicio'];
        $publicacao->dTermino = $publicacoes['dTermino'];
        $publicacao->hInicio = $publicacoes['hInicio'];
        $publicacao->hTermino = $publicacoes['hTermino'];
        $publicacao->descricao = $publicacoes['descricao'];
        $publicacao->idTipoPublicacao = $publicacoes['idTipoPublicacao'];
        $publicacao->save();

        return $publicacao;
    }
}
