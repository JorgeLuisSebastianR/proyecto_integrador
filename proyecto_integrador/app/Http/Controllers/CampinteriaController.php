<?php

namespace App\Http\Controllers;

use App\Models\Campinteria;
use App\Http\Requests\StoreCampinteriaRequest;
use App\Http\Requests\UpdateCampinteriaRequest;
class CampinteriaController extends Controller
{
    public function index()
    {
         return view('Campinterias.index')->with('Campinterias', Campinteria::all());
    }

    public function create()
    {
        return view('Campinterias.create');
    }

    public function store(StoreCampinteriaRequest $request)
    {
      $request->validate([
          'Nombre'          => 'required',
          'Telefono'        => 'required',
          'Calle'           => 'required',
          'NumeroExterior'  => 'required',
          'Colonia'         => 'required',
          'Municipio'       => 'required'
      ]);

      Carpinteria::create([
          'Nombre'          => $request->Nombre,
          'Telefono'        => $request->Telefono,
          'Calle'           => $request->Calle,
          'NumeroExterior'  => $request->NumeroExterior,
          'Colonia'         => $request->Colonia,
          'Municipio'       => $request->Municipio
      ]);

      return redirect()->route('Carpinterias.index');
    }

    public function show(Campinteria $campinteria)
    {
        //
    }

    public function edit(Campinteria $campinteria)
    {
        //
    }

    public function update(UpdateCampinteriaRequest $request, Campinteria $campinteria)
    {
        //
    }

    public function destroy(Campinteria $campinteria)
    {
        //
    }
}
