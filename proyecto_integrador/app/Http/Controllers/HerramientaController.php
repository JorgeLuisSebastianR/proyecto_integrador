<?php

namespace App\Http\Controllers;

use App\Models\Herramienta;
use App\Http\Requests\StoreHerramientaRequest;
use App\Http\Requests\UpdateHerramientaRequest;

class HerramientaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('herramientas.index')->with('herramientas', Herramienta::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('herramientas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHerramientaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHerramientaRequest $request)
    {
        $request->validate([
            'nombre'    => 'required',
            'marca'     => 'required',
            'modelo'    => 'required',
            'cantidad'  => 'required',
        ]);

        Herramienta::create([
            'nombre'        => $request->nombre,
            'marca'         => $request->marca,
            'modelo'        => $request->modelo,
            'descripcion'   => $request->descripcion,
            'cantidad'      => $request->cantidad
        ]);

        return redirect()->route('herramientas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Herramienta  $herramienta
     * @return \Illuminate\Http\Response
     */
    public function show(Herramienta $herramienta)
    {
        return view('herramientas.show', compact('herramienta'));   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Herramienta  $herramienta
     * @return \Illuminate\Http\Response
     */
    public function edit(Herramienta $herramienta)
    {
        return view('herramientas.edit', compact('herramienta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHerramientaRequest  $request
     * @param  \App\Models\Herramienta  $herramienta
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHerramientaRequest $request, Herramienta $herramienta)
    {
        $request->validate([ 
            'nombre' => 'required',
            'marca'     => 'required',
            'modelo'     => 'required',
            'cantidad' => 'required'
        ]);
        $herramienta->update($request->all());
        return redirect()->route('herramientas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Herramienta  $herramienta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Herramienta $herramienta)
    {
        $herramienta->delete();
        return redirect()->route('herramientas.index');
    }
}
