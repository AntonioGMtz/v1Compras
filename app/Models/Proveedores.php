<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    
    use HasFactory;

    // Definir la tabla correspondiente en la base de datos
    protected $table = 'proveedores';

    // Definir los atributos que se pueden asignar masivamente
    protected $fillable = [
        'razonsocial',
        'email',
        'nombrecomercial',
        'teluno',
        'teldos',
        'rfc',
        'clabe',
        'sucursal',
        'pais',
        'estado',
        'municipio',
        'localidad',
        'calle',
        'colonia',
        'cp',
        'numint',
        // Agrega más atributos según tus necesidades
    ];
}
