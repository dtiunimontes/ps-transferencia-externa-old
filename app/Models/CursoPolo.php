<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CursoPolo extends Model{
    use SoftDeletes;

    protected $table = 'cursos_polos';
    protected $fillable = ['id', 'curso_id', 'polo_id', 'vagas', 'periodo', 'turno'];
    protected $dates = ['deleted_at'];

    function polo(){
        return $this->belongsToMany(Polo::Class)->withPivot('polo_id');
    }

    function curso(){
        return $this->belongsToMany(Curso::Class)->withPivot('curso_id');
    }
}
