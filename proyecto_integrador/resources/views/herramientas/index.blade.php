@extends('layout.layout')
@section('content')

<section class="hero is-black">
    <div class="hero-body">
        <center>
            <font size="6">
                Listado de Herramientas
            </font>
        </center>
        <a href="/modulos/" class="button is-danger">Regresar</a>
        <a class="button is-info" href="/herramientas/create">Agregar nueva herramienta</a>
    </div>
</section>
    
<section class="section">

    <div align="right">
        <a href="{{ route('exportToPDFHerramientas') }}" class="button is-danger is-outlined">Descargar Reporte en PDF</a>
    </div><br><br>

    <div class="table-container">

        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Cantidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Cantidad</th>
                    <th>Acciones</th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    @forelse($herramientas as $herramienta)
                    <td>{{ $herramienta->nombre }}</td>
                    <td>{{ $herramienta->marca }}</td>
                    <td>{{ $herramienta->modelo }}</td>
                    <td>{{ $herramienta->cantidad }}</td>
                    <td>
                        <form action="{{ route('herramientas.destroy', $herramienta->id) }}" method="POST">
                            <a class="button is-success is-small" href="{{ route('herramientas.show', $herramienta->id) }}">Ver</a>
                            <a class="button is-info is-small" href="{{ route('herramientas.edit', $herramienta->id) }}">Editar</a>
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
                        Aún no cuenta con herramientas almacenadas, puede registrar una nueva herramienta <a href="/herramientas/create">aquí</a>.</center><br>
                </div>
            </font><br><br><br><br>
            @endforelse

        </table>
    </div>
</section>