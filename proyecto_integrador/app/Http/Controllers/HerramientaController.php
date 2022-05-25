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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHerramientaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHerramientaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Herramienta  $herramienta
     * @return \Illuminate\Http\Response
     */
    public function show(Herramienta $herramienta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Herramienta  $herramienta
     * @return \Illuminate\Http\Response
     */
    public function edit(Herramienta $herramienta)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Herramienta  $herramienta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Herramienta $herramienta)
    {
        //
    }
}
