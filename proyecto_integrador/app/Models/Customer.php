<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellidoPaterno',
        'apellidoMaterno',
        'telefono',
        'correoElectronico',
        'calle',
        'numeroCasa',
        'colonia',
        'municipio',
        'codigoPostal'
    ];
}
