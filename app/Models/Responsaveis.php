<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Responsaveis extends Model
{
    protected $fillable = [
        'nome',
        'cpf',
        'telefone',
        'email'
    ];

    public static function store($responsaveis){

        $responsavel = new Responsaveis;

        $responsavel->nome = $responsaveis['nome'];
        $responsavel->cpf = $responsaveis['cpf'];
        $responsavel->telefone = $responsaveis['telefone'];
        $responsavel->email = $responsaveis['email'];
        $responsavel->save();
    }
}
