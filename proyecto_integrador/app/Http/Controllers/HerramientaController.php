<?php

namespace App\Http\Controllers;

use App\Models\Herramienta;
use App\Models\Sucursal;
use App\Http\Requests\StoreHerramientaRequest;
use App\Http\Requests\UpdateHerramientaRequest;
use PDF;

class HerramientaController extends Controller
{
    public function index()
    {
        return view('herramientas.index')->with('herramientas', Herramienta::all());
    }

    public function create()
    {
        return view('herramientas.create')->with('sucursals', Sucursal::all());
    }

    public function store(StoreHerramientaRequest $request)
    {
        $request->validate([
          'idSucursal'  => 'required',
            'nombre'    => 'required',
            'marca'     => 'required',
            'cantidad'  => 'required',
        ]);

        Herramienta::create([
          'idSucursal'      => $request->idSucursal,
            'nombre'        => $request->nombre,
            'marca'         => $request->marca,
            'modelo'        => $request->modelo,
            'descripcion'   => $request->descripcion,
            'cantidad'      => $request->cantidad
        ]);

        return redirect()->route('herramientas.index');
    }

    public function show(Herramienta $herramienta)
    {
        return view('herramientas.show', compact('herramienta'));
    }

    public function edit(Herramienta $herramienta)
    {
        return view('herramientas.edit', compact('herramienta'))->with('herramientas', Herramienta::all());
    }

    public function update(UpdateHerramientaRequest $request, Herramienta $herramienta)
    {
        $request->validate([
            'idSucursal'  => 'required',
            'nombre'      => 'required',
            'marca'       => 'required',
            'cantidad'    => 'required'
        ]);
        $herramienta->update($request->all());
        return redirect()->route('herramientas.index');
    }

    public function destroy(Herramienta $herramienta)
    {
        $herramienta->delete();
        return redirect()->route('herramientas.index');
    }

    public function exportToPDFHerramientas()
    {
        $herramientas = Herramienta::all();
        view()->share('herramientas.exportToPDFHerramientas', $herramientas);
        $pdf = PDF::loadView('herramientas.exportToPDFHerramientas', ['herramientas' => $herramientas]);
        return $pdf->download('Reporte de Herramientas.pdf');
    }
}
//3
