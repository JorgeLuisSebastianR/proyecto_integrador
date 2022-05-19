<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campinteria extends Model
{
    use HasFactory;
    protected $fillable=[
      'Nombre', 'Telefono', 'Calle', 'NumeroExterior', 'Colonia', 'Municipio'
    ];
}
