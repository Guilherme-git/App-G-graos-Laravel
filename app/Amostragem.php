<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amostragem extends Model
{
    protected $table = 'amostragem';
    public $timestamps = false;

    protected $fillable = [
        'id_amos',
        'data',
        'placaCaminhaoAmostragem',
        'pesoAmostragem',
        'estado',
        'tipoGrao',
        'usuario'
    ];
}
