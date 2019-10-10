<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoPublicacoes extends Model
{
    protected $fillable = [
        'nome'
    ];

    public static function store($tipopublicacoes){

        $tipopublicacao = new TipoPublicacoes;

        $tipopublicacao->nome = $tipopublicacoes['nome'];
        $tipopublicacao->save();

        return $tipopublicacao;
    }
}
