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
    return view('Maderas.create');
  }

  public function store(StoreMaderaRequest $request)
  {
    $request->validate([
      'Fecha' => 'required',
      'Hora'  => 'required'
    ]);

    Madera::create([
      'Fecha' => $request->Fecha,
      'Hora'  => $request->Hora
    ]);

    return redirect()->route('Maderas.index');
  }

  public function show(Madera $madera)
  {
    return view('maderas.show',compact('madera'));
  }

  public function edit(Madera $madera)
  {
      request->validate)([
        'Fecha' => 'required';
        'Hora'  => 'required'
      ]);
  }

  public function update(UpdateMaderaRequest $request, Madera $madera)
  {
      //
  }

  public function destroy(Madera $madera)
  {
    $madera->delete();
    return redirect()->route('maderas.index');
  }
}
