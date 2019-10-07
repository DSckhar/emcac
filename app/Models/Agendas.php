<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agendas extends Model
{
    protected $fillable = [
        'titulo',
        'descricao',
        'dInicio',
        'dTermino'
        
    ];

    public static function store($agendas){

        $agenda = new Agendas;

        $agenda->titulo = $agendas['titulo'];
        $agenda->descricao = $agendas['descricao'];
        $agenda->dInicio = $agendas['dInicio'];
        $agenda->dTermino = $agendas['dTermino'];
        $agenda->save();
    }
}
