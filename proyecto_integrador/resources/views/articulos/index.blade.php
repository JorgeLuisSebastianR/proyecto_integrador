@extends('layout.layout')
@section('content')


<section class="hero is-link">
    <div class="hero-body">
        <p class="title">

            Agregar Articulo
        </p>
        <a class="button is-info" href="/articulo/create">Agregar </a>
    </div>
</section>
<section class="section">
        <div class="table-container">
            <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                <thead>
                <tr>
                    <th>Telefono</th>
                    <th>Calle</th>
                    <th>NumeroExterior</th>
                    <th>Colonia</th>
                    <th>Municipi</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>

                @forelse($articulos as $articulo)
                    <tr>
                        <td>{{ $articulo->Telefono}}</td>
                        <td>{{ $articulo->Calle}}</td>
                        <td>{{ $articulo->NumeroExterior}}</td>
                        <td>{{ $articulo->Colonia}}</td>
                        <td>{{ $articulo->Municipio}}</td>
                        <td>
                           <form action="{{route('articulos.destroy',$articulo->id)}}" method="POST">
                                <a class="button is-info is-small" href="{{route('articulos.show',$articulos->id)}}">Ver</a>
                                <a class="button is-info is-small" href="{{route('articulos.edit',$articulos->id)}}">Editar</a>
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
</section>
</section>
