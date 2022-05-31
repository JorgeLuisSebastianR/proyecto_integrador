<?php

namespace App\Http\Controllers;
use App\Models\PedidoArticulo;
use App\Models\Pedido;
use App\Models\Articulo;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePedidoArticuloRequest;
use App\Http\Requests\UpdatePedidoArticuloRequest;

class PedidoArticuloController extends Controller
{

    public function index()
    {
          return view('pedidoarticulos.index')
          ->with('pedidos', Pedido::all())
          ->with('pedidoarticulos', PedidoArticulo::all());
    }

    public function create()
    {
      return view('pedidoarticulos.create')
      ->with('articulos', Articulo::all())
      ->with('pedidos', Pedido::all());
    }

    public function store(StorePedidoArticuloRequest $request)
    {
      $request->validate([
        'idPedido'    => 'required',
        'idArticulo'  => 'required'
      ]);

      Pedido::create([
        'idPedido'    => $request->idPedido,
        'idArticulo'  => $request->idArticulo
      ]);
    }

    public function show(PedidoArticulo $pedidoArticulo)
    {
        //
    }

    public function edit(PedidoArticulo $pedidoArticulo)
    {
        //
    }

    public function update(UpdatePedidoArticuloRequest $request, PedidoArticulo $pedidoArticulo)
    {
      $request->validate([
        'idPedido'    => 'required',
        'idArticulo'  => 'required',
      ]);
      $pedido->update($request->all());
      return redirect()->route('pedidoarticulos.index');
    }

    public function destroy(PedidoArticulo $pedidoarticulo)
    {
      $pedidoarticulo->delete();
      return redirect()->route('pedidoarticulos.index');
    }
}
