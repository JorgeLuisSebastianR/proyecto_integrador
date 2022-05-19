@extends('layout.layout')
@section('content')
<section class="hero is-primary">
        <div class="hero-body">
            <p class="title">
                Carpinterias
            </p>
            <a class="button is-info" href="/Carpinterias/create">Agregar</a>
        </div>
</section>
////////////////////////////////
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

                @forelse($Carpinterias as $Carpinterias)
                    <tr>
                        <th>{{ $Carpinteria->Nombre }}</th>
                        <td>{{ $Carpinteria->Telefono }}</td>
                        <td>{{ $Carpinteria->Calle }}</td>
                        <td>{{ $Carpinteria->NumeroExterior }}</td>
                        <td>{{ $Carpinteria->Colonia }}</td>
                        <td>{{ $Carpinteria->Municipio }}</td>
                        <td>
                            @if ($Carpinteria->disponible == 1 )
                                <p>Disponible</p>
                            @else
                                <p>No disponible</p>
                            @endif
                        </td>
                        <td>
                           <form action="{{route('Carpinterias.destroy',$Carpinterias)}}" method="POST">
                                <a class="button is-info is-small" href="{{route('computadora.show',$computadora->id)}}">Ver</a>
                                <a class="button is-info is-small" href="{{route('computadora.edit',$computadora->id)}}">Editar</a>
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
