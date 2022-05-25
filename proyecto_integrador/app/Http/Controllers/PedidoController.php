<?php
//gfgfgf
namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePedidoRequest;
use App\Http\Requests\UpdatePedidoRequest;

class PedidoController extends Controller
{
    public function index()
    {
      return view('pedidos.index')->with('pedidos', Pedido::all());
    }

    public function create()
    {
      return view('Pedidos.create');
    }

    public function store(StorePedidoRequest $request)
    {
      $request->validate([
        'Fecha' => 'required',
        'Hora'  => 'required'
      ]);

      Pedido::create([
        'Fecha' => $request->Fecha,
        'Hora'  => $request->Hora
      ]);

      return redirect()->route('Pedidos.index');
    }

    public function show(Pedido $pedido)
    {
      return view('pedidos.show',compact('pedido'));
    }

    public function edit(Pedido $pedido)
    {
        //
    }

      public function update(UpdatePedidoRequest $request, Pedido $pedido)
    {
      request->validate)([
        'Fecha' => 'required',
        'Hora'  => 'required'
      ]);
    }

    public function destroy(Pedido $pedido)
    {
      $pedido->delete();
      return redirect()->route('pedidos.index');
    }

    public function databable(){
      $pedidos = Pedido::all();
      return view('pedidos.databable', compact('pedidos'));
    }
}
