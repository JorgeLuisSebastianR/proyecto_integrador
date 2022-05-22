<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Http\Requests\StoreArticuloRequest;
use App\Http\Requests\UpdateArticuloRequest;

class ArticuloController extends Controller
{
    public function index()
    {
        $articulos=Articulo:: all();
        return view ('articulos.index', compact('articulos'));

    }

    public function create()
    {
        //
    }
    public function store(StoreArticuloRequest $request)
    {
        //
    }
    public function show(Articulo $articulo)
    {
        //
    }
    public function edit(Articulo $articulo)
    {
        //
    }
    public function update(UpdateArticuloRequest $request, Articulo $articulo)
    {
        //
    }
    public function destroy(Articulo $articulo)
    {
        //
    }
}
