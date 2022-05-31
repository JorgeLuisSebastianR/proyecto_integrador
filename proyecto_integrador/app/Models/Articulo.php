<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;

    protected $fillable =[
'idMadera','Nombre','Tamaño','Color','Precio','Descripcion','Tipo'
    ];
    public function PedidoArticulos()
   {
       return $this->hasMany(PedidoArticulo::class,'id');
   }
    public function Madera()
    {
        return $this->belongsTo(Madera::class,'idMadera');
    }
}
