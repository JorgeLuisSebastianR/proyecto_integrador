<!--codigo para pagina principal -->
@extends('layout.layout')
@section('content')


<section class="hero is-link">
    <div class="hero-body">
        <center>
            <font size="8">
                <b>Listado de Artículos </b><br />
            </font>
        </center>
        <a href="/modulos/" class="button is-danger">Regresar</a>
        <a class="button is-info" href="/articulos/create">Agregar nuevo artículo</a>
    </div>
</section>

<section class="section">
    
<div align="right">
        <a href="#" class="button is-danger is-outlined">Descargar PDF</a>
</div><br><br>
        <div class="table-container">
            <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Precio de venta</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Nombre</th>
                    <th>Precio de venta</th>
                    <th>Acciones</th>
                </tr>
                </tfoot>
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
                    <font size="5">
                        <div class="notification is-warning is-small is-with"><br>
                            <center>
                                Aún no cuenta con artículos almacenados, puede registrar un nuevo artículo <a href="/articulos/create">aquí</a>.</center><br>
                        </div>
                    </font><br><br><br><br>
                @endforelse
            </table>
        </div>
    </section>
</section>
</section>
