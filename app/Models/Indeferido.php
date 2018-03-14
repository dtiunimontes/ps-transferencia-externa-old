<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Indeferido extends Model{

    protected $table = 'indeferidos';

    protected $fillable = [
        'cursos_polos_id',
        'usuarios_id'
    ];
}
