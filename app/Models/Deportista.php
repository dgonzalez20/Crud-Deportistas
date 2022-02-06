<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deportista extends Model
{
    protected $fillable=[
        /*Validación de formularios*/
    'nombre',
        'apellido',
        'direccion',
        'temporadas',
        'coste_licencia',

    ];


}
