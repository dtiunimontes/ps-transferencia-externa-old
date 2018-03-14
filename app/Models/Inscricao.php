<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inscricao extends Model{

    protected $table = 'inscricoes';
    protected $fillable = [
        'usuarios_id',
        'cursos_polos_id'
    ];
}
