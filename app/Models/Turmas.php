<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Turmas extends Model
{
    protected $fillable = [
        'nome',
        'ano'
    ];

    public static function store($turmas){

        $turma = new Turmas;

        $turma->nome = $turmas['nome'];
        $turma->ano = $turmas['ano'];
        $turma->save();
    }
}
