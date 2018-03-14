<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResultadoPreliminar extends Model{

    protected $table = 'resultado_preliminar';

    protected $fillable = [
        'cursos_polos_id',
        'usuarios_id'
    ];
}
