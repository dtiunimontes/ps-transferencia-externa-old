<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recurso extends Model{

    protected $table = 'recursos';
    protected $fillable = ['motivo_indeferimento_etapa1', 'inscricoes_id', 'recurso_etapa1', 'resposta_recurso_etapa1', 'autor_resposta_recurso_etapa1'];
}
