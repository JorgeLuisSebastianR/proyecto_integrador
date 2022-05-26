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
//creacion de la funcion pdf
//paso 3
    public function pdf(Campinteria $campinteria)
    {
         return view('campinterias.pdf',compact('campinteria'));
    }
//fin paso 3
//paso 4 crear archivo en vista "pdf.blade.php"
    public function create()
    {
        return view('campinterias.create');
    }

    public function store(StoreCampinteriaRequest $request)
    {
    $request->validate([
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
      ]);
      return redirect()->route('campinterias.index');
    }

    public function show(Campinteria $campinteria)
    {
        return view('campinterias.show',compact('campinteria'));
    }

    public function edit(Campinteria $campinteria)
    {
        return view('campinterias.edit',compact('campinteria'));
    }

    public function update(UpdateCampinteriaRequest $request, Campinteria $campinteria)
    {
      $request->validate([
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
     $pdf = PDF::loadView('campinterias.exportToPDF', compact('campinterias'));
     return $pdf->download('listadoCampinterias.pdf');

   }
}
