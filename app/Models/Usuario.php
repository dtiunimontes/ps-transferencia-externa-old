<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable{

    use Notifiable;

    protected $table = 'usuarios';

    protected $fillable = [
        'nome', 'cpf', 'email', 'password', 'rg', 'org_exped', 'data_nasc','telefone', 'necessidade_especial', 'cep',
        'logradouro', 'numero', 'complemento', 'cidade', 'bairro', 'estado', 'permissao'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
