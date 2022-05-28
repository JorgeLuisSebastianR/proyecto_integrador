<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedido_articulo extends Model
{
    use HasFactory;
    public function Pedido()
   {
       return $this->belongsTo(Pedido::class);
   }
   public function Articulo()
  {
      return $this->belongsTo(Pedido::class);
  }
}
