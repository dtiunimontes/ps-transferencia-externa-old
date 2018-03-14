<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Polo extends Model{
    use SoftDeletes;

    protected $table = 'polos';
    protected $fillable = ['nome'];
    protected $dates = ['deleted_at'];

    public function cursos(){
        return $this->belongsToMany(Curso::class, 'cursos_polos', 'polo_id', 'curso_id');
    }
}
