<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campinteria extends Model
{
    use HasFactory;
    protected $fillable=[
      'Telefono',
      'Calle',
      'NumeroExterior',
      'Colonia',
      'Municipio'
    ];
    public function Herramientas()
   {
       return $this->hasMany(Herramienta::class);
   }
   public function Pedidos()
  {
      return $this->hasMany(Pedido::class);
  }
}
