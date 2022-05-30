<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Herramienta extends Model
{
    use HasFactory;

    protected $fillable = [
      'idSucursal',
        'nombre',
        'marca',
        'modelo',
        'descripcion',
        'cantidad'
    ];
    public function Sucursal()
    {
        return $this->belongsTo(Sucursal::class,'idSucursal');
    }
}
