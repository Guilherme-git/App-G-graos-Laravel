<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amostragem extends Model
{
    protected $table = 'amostragem';
    public $timestamps = false;

    protected $fillable = [
        'id_amos',
        'peso_amos',
        'placa_amos',
        'users_id'
    ];
}
