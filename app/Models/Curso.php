<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Curso extends Model{
    use SoftDeletes;

    protected $table = 'cursos';
    protected $fillable = ['nome'];
    protected $dates = ['deleted_at'];

    public function polos(){
        return $this->belongsToMany(Polo::class, 'cursos_polos', 'curso_id', 'polo_id');
    }
}
