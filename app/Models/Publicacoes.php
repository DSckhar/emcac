<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

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

    public static function store($publicacoes, $nameFile){

        $publicacao = new Publicacoes;

        $publicacao->titulo = $publicacoes['titulo'];
        $publicacao->dInicio = $publicacoes['dInicio'];
        $publicacao->dTermino = $publicacoes['dTermino'];
        $publicacao->hInicio = $publicacoes['hInicio'];
        $publicacao->hTermino = $publicacoes['hTermino'];
        $publicacao->descricao = $publicacoes['descricao'];
        $publicacao->arquivo = $nameFile;
        $publicacao->idTipoPublicacao = $publicacoes['idTipoPublicacao'];
        $publicacao->save();

        return $publicacao;
    }

    public static function listar(){

        //buscando dados da tabela publicações e tipo de publicações
        $publicacoes = DB::table('publicacoes')
            ->join('tipo_publicacoes', 'tipo_publicacoes.id', '=', 'publicacoes.idTipoPublicacao')
            ->select('publicacoes.*', 'tipo_publicacoes.nome')
            ->get();
        
        return $publicacoes;
    }
}
