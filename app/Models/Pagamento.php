<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    protected $fillable = [
        'Tipo',
        'Valor',
    ];

    protected $primaryKey ='id_Pagamento';
}