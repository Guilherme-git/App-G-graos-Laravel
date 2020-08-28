<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classificacao extends Model
{
    protected $table = 'classificacao';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'pesoAmostra',
        'umidade',
        'impureza',
        'esverdeados',
        'partidosQuebradosAmassados',
        'totalavariados',
        'quantidadeGraosInicial',
        'quantidadeGraosDescontado',
        'quantidadeGraosFinal',
        'dataAtual',
        'queimado',
        'mofado',
        'germinado',
        'fermentado',
        'ardido',
        'danificado',
        'imaturo',
        'choco',
        'gessados',
        'carunchados',
        'brotados',
        'fragmentados',
        'resultTipo',
        'resultGrupo',
        'resultClasse',
        'amostragem',
        'usuario'
    ];
}
