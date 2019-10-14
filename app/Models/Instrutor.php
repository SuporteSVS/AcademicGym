<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instrutor extends Model
{
    protected $fillable = [
       'Nome',       
       'CPF',
       'Identidade',
       'tp_Aula',
    ];
    
    protected $primaryKey ='id_Instrutor';
}
