<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = [
       'Nome',
       'Identidade',
       'CPF',
       'CEP',
       'Rua',
       'Numero',
       'Complemento',
       'Bairro',
       'Cidade',
       'UF',
    ];
    protected $hidden = [
        'Biometria'
    ];

    protected $primaryKey ='Matricula';
}
