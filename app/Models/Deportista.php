<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deportista extends Model
{
    protected $fillable=[
    'nombre',
        'apellido',
        'direccion',
        'temporadas_value',
        'coste_licencia',
        

    ];


}
