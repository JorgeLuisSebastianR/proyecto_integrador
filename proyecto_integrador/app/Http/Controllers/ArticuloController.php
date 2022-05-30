<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Http\Requests\StoreArticuloRequest;
use App\Http\Requests\UpdateArticuloRequest;
use PDF;

class ArticuloController extends Controller
{
    public function index()
    {
         return view('articulos.index')->with('articulos', Articulo::all());
    }

    public function create()
    {
        return view('articulos.create');
    }

    public function store(StoreArticuloRequest $request)
    {
    $request->validate([
          'Nombre'      => 'required',
          'Tamaño'      => 'required',
          'Color'       => 'required',
          'Precio'      => 'required',
          'Descripcion' => 'required',
          'Tipo'        => 'required'

      ]);
      Articulo::create([
          'Nombre'      => $request->Nombre,
          'Tamaño'      => $request->Tamaño,
          'Color'       => $request->Color,
          'Precio'      => $request->Precio,
          'Descripcion' => $request->Descripcion,
          'Tipo'        => $request->Tipo


      ]);
      return redirect()->route('articulos.index');
    }
//funcion para el boton ver
    public function show(Articulo $articulo)
    {
        return view('articulos.show',compact('articulo'));
    }
// funcion para el boton editar
    public function edit(Articulo $articulo)
    {
        return view('articulos.edit', compact('articulo'));
    }

    public function update(UpdateArticuloRequest $request, Articulo $articulo)
    {
      $request->validate([
          'Nombre'      => 'required',
          'Tamaño'      => 'required',
          'Color'       => 'required',
          'Precio'      => 'required',
          'Descripcion' => 'required',
          'Tipo'        => 'required'
      ]);
      $articulo->update($request->all());
      return redirect()->route('articulos.index');
    }
//funcion vista principal de articulo
    public function destroy(articulo $articulo)
    {
      $articulo->delete();
      return redirect()->route('articulos.index');
    }

    public function databable(){
       $Articulos = Articulo::all();
       return view('articulos.datatable',compact('Articulos'));
   }

   public function exportToPDFArticulos()
    {
        $articulos = Articulo::all();
        view()->share('articulos.exportToPDFArticulos', $articulos);
        $pdf = PDF::loadView('articulos.exportToPDFArticulos', ['articulos' => $articulos]);
        return $pdf->download('Reporte de Articulos.pdf');
    }
}
