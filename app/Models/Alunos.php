<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    protected $fillable = [
        'nome',
        'nascimento',
        'responsavel'
    ];

    public static function store($alunos){

        $aluno = new Alunos;

        $aluno->nome = $alunos['nome'];
        $aluno->nascimento = $alunos['nascimento'];
        $aluno->responsavel = $alunos['responsavel'];
        $aluno->save();
    }
}
