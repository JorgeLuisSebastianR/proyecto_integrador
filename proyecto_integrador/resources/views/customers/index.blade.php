@extends('layout.layout')
@section('content')

<section class="hero is-link">
    <div class="hero-body">
        <p class="title">
            Listado de Clientes
        </p>
        <a class="button is-info" href="/customers/create">Agregar</a>
    </div>
</section>

<section class="section">

    <div class="table-container">

        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
            <thead>
                <tr>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Nombre</th>
                </tr>
            </tfoot>
            <tbody>
                @forelse($clientes as $cliente)
                <tr>
                    <th>{{ $cliente->nombre }}</th>
                </tr>
                <td>
                    <form action="{{ route('customers.destroy', $cliente->id) }}" method="POST">
                        <a class="button is-info is-small" href="{{ route('customers.show', $cliente->id) }}">Ver</a>
                        <a class="button is-info is-small" href="{{ route('customers.edit', $cliente->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="button is-danger is-small">Eliminar</button>
                    </form>
                </td>
            </tbody>

            @empty
                <h3>No hay datos en la base de datos</h3>
            @endforelse

        </table>
    </div>
</section>