<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;

    protected $fillable =[
'Nombre','Tamaño','Color','Descripcion','Precio','Tipo'
    ];
    public function pedido_articulos()
   {
       return $this->hasMany(pedido_articulo::class);
   }
    public function Madera()
    {
        return $this->hasOne(Madera::class);
    }
}
