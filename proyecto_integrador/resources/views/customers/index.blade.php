@extends('layout.layout')
@section('content')

<section class="hero is-black">
    <div class="hero-body">
        <center>
            <font size="6">
                Listado de Clientes
            </font>
        </center>
        <a href="/modulos/" class="button is-danger">Regresar</a>
        <a class="button is-info" href="/customers/create">Agregar nuevo cliente</a>
    </div>
</section>
    
<section class="section">

    <div align="right">
        <a href="{{ route('exportToPDFCustomers') }}" class="button is-danger is-outlined">Descargar Reporte en PDF</a>
    </div><br><br>

    <div class="table-container">

        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Primer Apellido</th>
                    <th>Segundo Apellido</th>
                    <th>Teléfono de contacto</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Nombre</th>
                    <th>Primer Apellido</th>
                    <th>Segundo Apellido</th>
                    <th>Teléfono de contacto</th>
                    <th>Acciones</th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    @forelse($clientes as $cliente)
                    <td>{{ $cliente->nombre }}</td>
                    <td>{{ $cliente->apellidoPaterno }}</td>
                    <td>{{ $cliente->apellidoMaterno }}</td>
                    <td>{{ $cliente->telefono }}</td>
                    <td>
                        <form action="{{ route('customers.destroy', $cliente->id) }}" method="POST">
                            <a class="button is-success is-small" href="{{ route('customers.show', $cliente->id) }}">Ver</a>
                            <a class="button is-info is-small" href="{{ route('customers.edit', $cliente->id) }}">Editar</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button is-danger is-small">Eliminar</button>
                        </form>
                    </td>
                </tr>
            </tbody>

            @empty
            <font size="5">
                <div class="notification is-warning is-small is-with"><br>
                    <center>
                        Aún no cuenta con clientes almacenados, puede registrar un nuevo cliente <a href="/customers/create">aquí</a>.</center><br>
                </div>
            </font><br><br><br><br>
            @endforelse

        </table>
    </div>
</section>