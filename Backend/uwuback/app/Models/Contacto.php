<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;
    //Esta propiedad permite que se asignen datos masivamente
    //Su uso es necesario por seguridad
    //En este suelen ir los datos recibidos por la api de un cliente para este modelo
    protected $fillable = 
    ['primer_nombre', 'primer_apellido',
     'correo_electronico','correo_electronico',
     'asunto', 'mensaje'
    ];
}
