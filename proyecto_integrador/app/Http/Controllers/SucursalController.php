<?php

namespace App\Http\Controllers;

use App\Models\Sucursal;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSucursalRequest;
use App\Http\Requests\UpdateSucursalRequest;

class SucursalController extends Controller
{
    public function index()
    {
        return view('sucursals.index')->with('sucursals', Sucursal::all());
    }

    public function create()
    {
         return view('sucursals.create');
    }

    public function store(StoreSucursalRequest $request)
    {
      $request->validate([
        'Telefono'        => 'required',
        'Calle'           => 'required',
        'NumeroExterior'  => 'required',
        'Colonia'         => 'required',
        'Municipio'       => 'required'
    ]);
    Sucursal::create([
        'Telefono'        => $request->Telefono,
        'Calle'           => $request->Calle,
        'NumeroExterior'  => $request->NumeroExterior,
        'Colonia'         => $request->Colonia,
        'Municipio'       => $request->Municipio
    ]);
    return redirect()->route('sucursals.index');
    }

    public function show(Sucursal $sucursal)
    {
        return view('sucursals.show',compact('sucursal'));
    }

    public function edit(Sucursal $sucursal)
    {
      return view('sucursals.edit',compact('sucursal'));
    }

    public function update(UpdateSucursalRequest $request, Sucursal $sucursal)
    {
      $request->validate([
        'Telefono'        => 'required',
        'Calle'           => 'required',
        'NumeroExterior'  => 'required',
        'Colonia'         => 'required',
        'Municipio'       => 'required'
]);
$sucursal->update($request->all());
return redirect()->route('sucursals.index');
    }

    public function destroy(Sucursal $sucursal)
    {
      $sucursal->delete();
    return redirect()->route('sucursals.index');
    }
}
