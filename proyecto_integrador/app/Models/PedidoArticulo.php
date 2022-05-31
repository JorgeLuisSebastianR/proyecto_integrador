<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoArticulo extends Model
{
    use HasFactory;
    public function Pedido()
   {
       return $this->belongsTo(Pedido::class,'idPedido');
   }
   public function Articulo()
  {
      return $this->belongsTo(Articulo::class,'idArticulo');
  }
}
