<?php
//dsfsfd
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $fillable=[
      'idSucursal',
      'idCustomer',
      'Fecha',
      'Hora'
    ];

    public function Sucursal()
    {
        return $this->hasMany(Sucursal::class,'id');
    }
    public function Customer()
    {
        return $this->belongsTo(Customer::class,'idCustomer');
    }
    public function PedidoArticulos()
   {
       return $this->hasMany(PedidoArticulo::class,'id');
   }

}
