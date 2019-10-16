<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Fotos extends Model
{
    protected $fillable = [
        'descricao',
        'arquivo',
        'idPublicacao'
    ];

    public static function store($fotos, $nameFile){

        $foto = new Fotos;

        $foto->descricao = $fotos['descricao'];
        $foto->arquivo = $nameFile;
        $foto->idPublicacao = $fotos['idPublicacao'];
        $foto->save();
    }

    public static function listarIdPublicacoes($idPublicacao){

        //buscando dados da tabela publicações e fotos
        $foto = DB::table('fotos')
            ->where('fotos.idPublicacao', '=', $idPublicacao)
            ->orderBy('fotos.idPublicacao', 'ASC')->take(1)
            ->select('fotos.arquivo as foto')
            ->get();
        
        return $foto;
    }
}
