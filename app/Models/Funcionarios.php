<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionarios extends Model
{
    protected $fillable = [
        'nome',
        'cargo',
        'formacao',
        'foto'
    ];

    public static function store($funcionarios){

        $funcionario = new Funcionarios;

        $funcionario->nome = $funcionarios['nome'];
        $funcionario->cargo = $funcionarios['cargo'];
        $funcionario->formacao = $funcionarios['formacao'];
        $funcionario->foto = $funcionarios['foto'];
        $funcionario->save();
    }
}
