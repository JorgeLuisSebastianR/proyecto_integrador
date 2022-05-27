<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use PDF;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('customers.index')->with('clientes', Customer::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerRequest $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellidoPaterno' => 'required',
            'apellidoMaterno' => 'required',
            'telefono' => 'required',
            'calle' => 'required',
            'numeroCasa' => 'required',
            'colonia' => 'required',
            'municipio' => 'required',
            'codigoPostal' => 'required'
        ]);

        Customer::create([
            'nombre' => $request->nombre,
            'apellidoPaterno' => $request->apellidoPaterno,
            'apellidoMaterno' => $request->apellidoMaterno,
            'telefono' => $request->telefono,
            'correoElectronico' =>  $request->correoElectronico,
            'calle' => $request->calle,
            'numeroCasa' => $request->numeroCasa,
            'colonia' => $request->colonia,
            'municipio' => $request->municipio,
            'codigoPostal' => $request->codigoPostal
        ]);

        return redirect()->route('customers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return view('customers.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view('customers.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerRequest  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        $request->validate([
            'nombre' => 'required',
            'apellidoPaterno' => 'required',
            'apellidoMaterno' => 'required',
            'telefono' => 'required',
            'calle' => 'required',
            'numeroCasa' => 'required',
            'colonia' => 'required',
            'municipio' => 'required',
            'codigoPostal' => 'required'
        ]);
        $customer->update($request->all());
        return redirect()->route('customers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customers.index');
    }

    /*public function exportToPDF(){
        $customers = Customer::get();
        $pdf = PDF::loadView('customers.exportToPDF', compact('customers'));
        return $pdf->download('ListadoClientes.pdf');
    }*/

    public function exportToPDF()
    {
        $customers = Customer::all();
        view()->share('customers.exportToPDF', $customers);
        $pdf = PDF::loadView('customers.exportToPDF', ['customers' => $customers]);
        return $pdf->download('Reporte de Clientes.pdf');
    }
}
