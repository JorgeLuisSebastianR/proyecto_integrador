<?php
namespace App\Http\Controllers;

use App\Models\Campinteria;
use App\Http\Requests\StoreCampinteriaRequest;
use App\Http\Requests\UpdateCampinteriaRequest;
class CampinteriaController extends Controller
{
    public function index()
    {
         return view('campinterias.index')->with('campinterias', campinteria::all());
    }

    public function create()
    {
        return view('campinterias.create');
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
      return redirect()->route('campinterias.index');
    }

    public function show(Campinteria $Campinteria)
    {
        return view('campinterias.show',compact('Campinteria'));
    }

    public function edit(Campinteria $Campinteria)
    {
        //
    }

    public function update(UpdateCampinteriaRequest $request, Campinteria $Campinteria)
    {
        //
    }

    public function destroy(campinteria $campinteria)
    {
      $campinteria->delete();
      return redirect()->route('campinterias.index');
    }
    public function databable(){
       $Campinterias = Campinteria::all();
       return view('campinterias.datatable',compact('Campinterias'));
   }
}
