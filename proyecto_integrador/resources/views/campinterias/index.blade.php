@extends('layout.layout')
@section('content')

    <section class="hero is-link">
        <div class="hero-body">
            <p class="title">
                Sucursales
            </p>
            <a class="button is-info" href="/campinterias/create">Agregar</a>
        </div>
    </section>

<section class="section">
        <div class="table-container">
            <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Calle</th>
                    <th>NumeroExterior</th>
                    <th>Colonia</th>
                    <th>Municipio</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                  <th>Nombre</th>
                  <th>Telefono</th>
                  <th>Calle</th>
                  <th>NumeroExterior</th>
                  <th>Colonia</th>
                  <th>Municipio</th>
                  <th>Acciones</th>
                </tr>
                </tfoot>
                <tbody>

                @forelse($campinterias as $campinteria)
                    <tr>
                        <th>{{ $campinteria->Nombre}}</th>
                        <td>{{ $campinteria->Telefono}}</td>
                        <td>{{ $campinteria->Calle}}</td>
                        <td>{{ $campinteria->NumeroExterior}}</td>
                        <td>{{ $campinteria->Colonia}}</td>
                        <td>{{ $campinteria->Municipio}}</td>
                        <td>
<<<<<<< HEAD
                            @if ($Campinteria->disponible == 1 )
                                <p>Disponible</p>
                            @else
                                <p>No disponible</p>
                            @endif
                        </td>
                        <td>
                           <form action="{{route('Campinterias.destroy',$Campinteria)}}" method="POST">
                                <a class="button is-info is-small" href="{{route('Campinterias.show',$Campinteria->id)}}">Ver</a>
                                <a class="button is-info is-small" href="{{route('Campinterias.edit',$Campinteria->id)}}">Editar</a>
=======
                           <form action="{{route('campinterias.destroy',$campinteria->id)}}" method="POST">
                                <a class="button is-info is-small" href="{{route('campinterias.show',$campinteria->id)}}">Ver</a>
                                <a class="button is-info is-small" href="{{route('campinterias.edit',$campinteria->id)}}">Editar</a>
>>>>>>> fdf76329a3e3d2229e8c807424b0dc09d6ea53b9
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button is-info is-small">Eliminar</button>


                            </form>
                        </td>

                </tbody>

                @empty
                    <h3>No hay datos en la base de datos</h3>
                @endforelse
            </table>
        </div>
    </section>
