@extends('layout.layout')
@section('content')


<section class="hero is-link">
    <div class="hero-body">
        <p class="title">

            Agregar Articulo
        </p>
        <a class="button is-info" href="/articulos/create">Agregar </a>
    </div>
</section>

<!--ddddddddddd-->

<section class="section">
        <div class="table-container">
            <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Precio de venta</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>

                @forelse($articulos as $articulo)
                    <tr>
                        <td>{{ $articulo->Nombre}}</td>
                        <td>{{ $articulo->Precio}}</td>
                       
                        <td>
                           <form action="{{route('articulos.destroy',$articulo->id)}}" method="POST">
                                <a class="button is-success is-small" href="{{route('articulos.show',$articulo->id)}}">Ver</a>
                                <a class="button is-info is-small" href="{{route('articulos.edit',$articulo->id)}}">Editar</a>
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
</section>
</section>
