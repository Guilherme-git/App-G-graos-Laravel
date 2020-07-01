<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amostragem extends Model
{
    protected $table = 'amostragem';
    public $timestamps = false;

    protected $fillable = [
        'id_amos',
        'data_amos',
        'placa_caminhao_amos',
        'peso_amos',
        'estado_amos',
        'tipo_grao',
        'usuario'
    ];
}
