<?php
//gfgfgf
namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Customer;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePedidoRequest;
use App\Http\Requests\UpdatePedidoRequest;
use DB;

class PedidoController extends Controller
{
    public function index()
    {
      return view('pedidos.index')->with('pedidos', Pedido::all());
    }

    public function create()
    {
      //$customers = $Customer::all();compact(customers)
      return view('pedidos.create');
    }

    public function store(StorePedidoRequest $request)
    {
      $request->validate([
        'idSucursal' => 'required',
        'idCustomer'  => 'required',
        'Fecha' => 'required',
        'Hora'  => 'required'
      ]);

      Pedido::create([
        'idSucursal'  => $request->idSucursal,
        'idCustomer'  => $request->idCustomer,
        'Fecha'       => $request->Fecha,
        'Hora'        => $request->Hora
      ]);

      return redirect()->route('pedidos.index');
    }

    public function show(Pedido $pedido)
    {
      return view('pedidos.show',compact('pedido'));
    }

    public function edit(Pedido $pedido)
    {
      return view('pedidos.edit', compact('pedido'));
    }

      public function update(UpdatePedidoRequest $request, Pedido $pedido)
    {
      $request->validate([
        'idSucursal' => 'required',
        'idCustomer'  => 'required',
        'Fecha' => 'required',
        'Hora'  => 'required'
      ]);
      $pedido->update($request->all());
      return redirect()->route('pedidos.index');
    }

    public function destroy(pedido $pedido)
    {
      $pedido->delete();
      return redirect()->route('pedidos.index');
    }

    public function databable(){
      $Pedidos = Pedido::all();
      return view('pedidos.databable', compact('Pedidos'));
    }
}
//.....