<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Retificacao extends Model{

    protected $table = 'retificacoes';

    protected $fillable = [
        'cursos_polos_id',
        'tipo',
        'data'
    ];
}
