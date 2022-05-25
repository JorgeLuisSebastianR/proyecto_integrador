<?php

namespace App\Http\Controllers;

use App\Models\Madera;
use App\Http\Requests\StoreMaderaRequest;
use App\Http\Requests\UpdateMaderaRequest;

class MaderaController extends Controller
{
  public function index()
  {
    return view('maderas.index')->with('maderas', Madera::all());
  }

  public function create()
  {
    return view('maderas.create');
  }

  public function store(StoreMaderaRequest $request)
  {
    $request->validate([
      'Nombre'    => 'required',
      'Color'     => 'required',
      'Pulgada'   => 'required',
      'Cantidad'  => 'required'
    ]);

    Madera::create([
      'Nombre'    => $request->Nombre,
      'Color'     => $request->Color,
      'Pulgada'   => $request->Pulgada,
      'Cantidad'  => $request->Canditidad
    ]);

    return redirect()->route('maderas.index');
  }

  public function show(Madera $madera)
  {
    return view('maderas.show', compact('madera'));
  }

  public function edit(Madera $madera)
  {
    return view('maderas.edit', compact('madera'));
  }

  public function update(UpdateMaderaRequest $request, Madera $madera)
  {
    $request->validate([
      'Nombre'    => 'required',
      'Color'     => 'required',
      'Pulgada'   => 'required',
      'Cantidad'  => 'required'
    ]);
    $madera->update($request->all());
    return redirect()->route('maderas.index');
  }

  public function destroy(madera $madera)
  {
    $madera->delete();
    return redirect()->route('maderas.index');
  }

  public function databable(){
    $Maderas = Madera::all();
    return view('maderas.datatable',compact('Maderas'));
}


}
