<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Proveedor extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // Definir la tabla correspondiente en la base de datos
    

    // Definir los atributos que se pueden asignar masivamente
    protected $fillable = [
        'razon_social',
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