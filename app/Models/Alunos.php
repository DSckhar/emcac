<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    protected $fillable = [
        'nome',
        'nascimento',
        'parentesco',
        'nomeResponsavel',
        'emailResponsavel',
        'telefoneResponsavel'
    ];

    public static function store($alunos){

        $aluno = new Alunos;

        $aluno->nome = $alunos['nome'];
        $aluno->nascimento = $alunos['nascimento'];
        $aluno->parentesco = $alunos['parentesco'];
        $aluno->nomeResponsavel = $alunos['nomeResponsavel'];
        $aluno->emailResponsavel = $alunos['emailResponsavel'];
        $aluno->telefoneResponsavel = $alunos['telefoneResponsavel'];
        $aluno->save();
    }
}
