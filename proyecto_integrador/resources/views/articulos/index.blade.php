@extends('layout.layout')
@section('content')


<section class="hero is-link">
    <div class="hero-body">
        <p class="title">
            Agregar Articulo
        </p>
        <a class="button is-info" href="/articulo/create">Agregar</a>
    </div>
</section>

<!-- ....................ME FALTA EDITAR EL INDEX Y.. QUE ES ARTICULOCONTROLLER?.jsjsj..................-->
<section class="section">

    <div class="table-container">

        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
            <thead>
                <tr>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Descripción</th>
                    <th>Tipo</th>
                    <th>Precio de compra</th>
                    <th>Precio de venta</th>
                    <th>Ganancia</th>
                    <th>Stock</th>
                    <th>Disponible</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Descripción</th>
                    <th>Tipo</th>
                    <th>Precio de compra</th>
                    <th>Precio de venta</th>
                    <th>Ganancia</th>
                    <th>Stock</th>
                    <th>Disponible</th>
                    <th>Acciones</th>
                </tr>
            </tfoot>
            <tbody>

                @forelse($<section class="section">

    <div class="table-container">

        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
            <thead>
                <tr>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Descripción</th>
                    <th>Tipo</th>
                    <th>Precio de compra</th>
                    <th>Precio de venta</th>
                    <th>Ganancia</th>
                    <th>Stock</th>
                    <th>Disponible</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Descripción</th>
                    <th>Tipo</th>
                    <th>Precio de compra</th>
                    <th>Precio de venta</th>
                    <th>Ganancia</th>
                    <th>Stock</th>
                    <th>Disponible</th>
                    <th>Acciones</th>
                </tr>
            </tfoot>
            <tbody>

                @forelse($articulos as $articulo)
                <tr>
                    <th>{{ $articulo->marca }}</th>
                    <td>{{ $articulo->modelo }}</td>
                    <td>{{ $articulo->descripcion }}</td>
                    <td>{{ $articulo->tipo }}</td>
                    <td>$ {{ $articulo->precioDeCompra }} MXN</td>
                    <td>$ {{ $articulo->precioDeVenta }} MXN</td>
                    <td>$ {{ $articulo->precioDeVenta - $articulo->precioDeCompra }} MXN</td>
                    <td>{{ $articulo->stock }} unidades</td>
                    <td>
                        @if ($articulo->disponible == 1 )
                        <p>Disponible</p>
                        @else
                        <p>No disponible</p>
                        @endif
                    

                    </td>
                    <td>
                        <form action="{{route('articulo.destroy' , $articulo ->id)}}" method="POST">

                            <a class="button is-info is-small" href="{{route('articulo.show', $articulo-> id)}}">

                                Ver</a>
                            <a class="button is-info is-small" href="{{route('articulo.edit', $articulo-> id)}}">
                                Editar
                            </a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button is-danger is-small">
                                Eliminar
                            </button>


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

@endsection as $articulo)
                <tr>
                    <th>{{ $articulo->marca }}</th>
                    <td>{{ $articulo->modelo }}</td>
                    <td>{{ $articulo->descripcion }}</td>
                    <td>{{ $articulo->tipo }}</td>
                    <td>$ {{ $articulo->precioDeCompra }} MXN</td>
                    <td>$ {{ $articulo->precioDeVenta }} MXN</td>
                    <td>$ {{ $articulo->precioDeVenta - $articulo->precioDeCompra }} MXN</td>
                    <td>{{ $articulo->stock }} unidades</td>
                    <td>
                        @if ($articulo->disponible == 1 )
                        <p>Disponible</p>
                        @else
                        <p>No disponible</p>
                        @endif
                    

                    </td>
                    <td>
                        <form action="{{route('articulo.destroy' , $articulo ->id)}}" method="POST">

                            <a class="button is-info is-small" href="{{route('articulo.show', $articulo-> id)}}">

                                Ver</a>
                            <a class="button is-info is-small" href="{{route('articulo.edit', $articulo-> id)}}">
                                Editar
                            </a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button is-danger is-small">
                                Eliminar
                            </button>


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

@endsection