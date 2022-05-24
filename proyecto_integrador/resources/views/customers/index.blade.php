@extends('layout.layout')
@section('content')

<section class="hero is-success">
    <div class="hero-body">
        <center>
            <font size="8">
                <b>Listado de Clientes </b><br />
            </font>
        </center>
        <left>
        <a class="button is-link is-medium" href="/customers/create">Nuevo cliente</a>
        <nav class="level">
                <p class="control">
                    <input class="input" type="text" placeholder="Escribe aquí para buscar">
                </p>
                <p class="control">
                    <button class="button">Buscar</button>
                </p>
        </nav>
        </left>
            
    </div>
</section>

<section class="section">

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