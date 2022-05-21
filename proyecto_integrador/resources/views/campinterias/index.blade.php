@extends('layout.layout')
@section('content')

    <section class="hero is-link">
        <div class="hero-body">
            <p class="title">
                Sucursales
            </p>
            <a class="button is-info" href="/Campinteria/create">Agregar</a>
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
                </tr>
                </tfoot>
                <tbody>

                @forelse($Campinterias as $Campinteria)
                    <tr>
                        <th>{{ $Campinteria->Nombre}}</th>
                        <td>{{ $Campinteria->Telefono}}</td>
                        <td>{{ $Campinteria->Calle}}</td>
                        <td>{{ $Campinteria->NumeroExterior}}</td>
                        <td>{{ $Campinteria->Colonia}}</td>
                        <td>{{ $Campinteria->Municipio}}</td>
                        <td>
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
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button is-info is-small">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                </tbody>

                @empty
                    <h3>No hay datos en la base de datos</h3>
                @endforelse
            </table>
        </div>
    </section>
