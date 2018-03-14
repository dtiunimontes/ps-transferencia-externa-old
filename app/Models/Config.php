<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Config extends Model{

    protected $table = 'configs';
    protected $fillable = [
        'inicio_inscricoes',
        'termino_inscricoes',
        'inicio_recursos_etapa1',
        'termino_recursos_etapa1',
        'inicio_recursos_etapa2',
        'termino_recursos_etapa2'
    ];
}
