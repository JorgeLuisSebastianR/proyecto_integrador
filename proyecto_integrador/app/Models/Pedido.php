<?php
//dsfsfd
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $fillable=[
      'Fecha',
      'Hora'
    ];

    public function Campinteria()
    {
        return $this->belongsTo(Campinteria::class);
    }
    public function Customer()
    {
        return $this->hasOne(Customer::class);
    }
    public function pedido_articulos()
   {
       return $this->hasMany(pedido_articulo::class);
   }

}
