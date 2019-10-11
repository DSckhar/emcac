<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TurmaAlunos extends Model
{
    protected $fillable = [
        'idAluno',
        'idTurma'
    ];

    public static function store($turmaAlunos){

        $turmaAluno = new TurmaAlunos;

        $turmaAluno->idAluno = $turmaAlunos['idAluno'];
        $turmaAluno->idTurma = $turmaAlunos['idTurma'];
        $turmaAluno->save();
    }
}
