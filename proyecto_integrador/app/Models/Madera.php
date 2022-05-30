<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Madera extends Model
{
    use HasFactory;

    protected $fillable = [
      'Nombre',
      'Color',
      'Pulgada',
      'Cantidad'
    ];
    public function Articulo()
    {
        return $this->hasOne(Articulo::class);
    }
}
