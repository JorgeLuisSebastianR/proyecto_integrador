<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Pedidos;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use PDF;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customers.index')->with('clientes', Customer::all());
    }

    public function create()
    {
        return view('customers.create');
    }

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

    public function show(Customer $customer)
    {
        return view('customers.show', compact('customer'));
    }
    public function edit(Customer $customer)
    {
        return view('customers.edit', compact('customer'));
    }

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

    public function exportToPDFCustomers()
    {
        $customers = Customer::all();
        view()->share('customers.exportToPDFCustomers', $customers);
        $pdf = PDF::loadView('customers.exportToPDFCustomers', ['customers' => $customers]);
        return $pdf->download('Reporte de Clientes.pdf');
    }
}
