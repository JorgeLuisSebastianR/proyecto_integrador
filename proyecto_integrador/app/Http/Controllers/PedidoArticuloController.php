<?php

namespace App\Http\Controllers;

use App\Models\PedidoArticulo;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePedidoArticuloRequest;
use App\Http\Requests\UpdatePedidoArticuloRequest;

class PedidoArticuloController extends Controller
{

    public function index()
    {
          return view('pedidoarticulos.index');
    }

    public function create()
    {
        //
    }

    public function store(StorePedidoArticuloRequest $request)
    {
        //
    }
turn \Illuminate\Http\Response
     */
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
        //
    }

    public function destroy(PedidoArticulo $pedidoArticulo)
    {
        //
    }
}
