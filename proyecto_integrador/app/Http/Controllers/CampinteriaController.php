<?php
namespace App\Http\Controllers;

use App\Models\Campinteria;
use App\Http\Requests\StoreCampinteriaRequest;
use App\Http\Requests\UpdateCampinteriaRequest;
use Barryvdh\DomPDF\Facade as PDF;
class CampinteriaController extends Controller
{
    public function index()
    {
         return view('campinterias.index')->with('campinterias', Campinteria::all());
    }

    public function create()
    {
        return view('campinterias.create');
    }

    public function store(StoreCampinteriaRequest $request)
    {
    $request->validate([
<<<<<<< HEAD
          'Nombre' => 'required',
          'Telefono' => 'required',
          'Calle' => 'required',
          'NumeroExterior' => 'required',
          'Colonia' => 'required',
          'Municipio' => 'required'
      ]);
      Campinteria::create([
          'Nombre' => $request->Nombre,
          'Telefono' => $request->Telefono,
          'Calle' => $request->Calle,
          'NumeroExterior' => $request->NumeroExterior,
          'Colonia' => $request->Colonia,
          'Municipio'=> $request->Municipio
=======
          'Telefono'        => 'required',
          'Calle'           => 'required',
          'NumeroExterior'  => 'required',
          'Colonia'         => 'required',
          'Municipio'       => 'required'
      ]);
      Campinteria::create([
          'Telefono'        => $request->Telefono,
          'Calle'           => $request->Calle,
          'NumeroExterior'  => $request->NumeroExterior,
          'Colonia'         => $request->Colonia,
          'Municipio'       => $request->Municipio
>>>>>>> 45df8dfd8c4eb2dd923968568708c3ed896d568f
      ]);
      return redirect()->route('campinterias.index');
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
      $request->validate([
          'Nombre'          => 'required',
          'Telefono'        => 'required',
          'Calle'           => 'required',
          'NumeroExterior'  => 'required',
          'Colonia'         => 'required',
          'Municipio'       => 'required'
      ]);
      $campinteria->update($request->all());
      return redirect()->route('campinterias.index');
    }
    public function destroy(campinteria $campinteria)
    {
      $campinteria->delete();
      return redirect()->route('campinterias.index');
    }
    public function databable(){
       $campinterias = Campinteria::all();
       return view('campinterias.datatable',compact('campinterias'));
   }
   public function exportToPDF(){
     $campinterias = Campinteria::get();
     $pdf = PDF::loadView('campinterias.exportToPDF', compact('campinteria'));
     return $pdf->download('listadoCampinterias.pdf');
   }
}
