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

      Campinteria::create([
          'Nombre'          => $request->Nombre,
          'Telefono'        => $request->Telefono,
          'Calle'           => $request->Calle,
          'NumeroExterior'  => $request->NumeroExterior,
          'Colonia'         => $request->Colonia,
          'Municipio'       => $request->Municipio
      ]);
      return redirect()->route('Campinteria.index');
    }

    public function show(Campinteria $campinteria)
    {
        return view('campinterias.show',compact('campinteria'));
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
      $campinterias->delete();
      return rediret()-reote('campinteria.index');
    }
    public function databable(){
       $campinterias = campinteria::all();
       return view('campinterias.datatable',compact('campinterias'));
   }
}
