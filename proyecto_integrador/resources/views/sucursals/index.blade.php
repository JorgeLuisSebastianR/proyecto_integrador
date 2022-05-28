@extends('layout.layout')
@section('content')

    <section class="hero is-black">
        <div class="hero-body">
        <center>
            <font size="6">
                Sucursales Carpintería "Diamante Azúl"
            </font>
        </center>
            <a href="/modulos/" class="button is-danger">Regresar</a>
            <a class="button is-info" href="/sucursals/create">Agregar</a>
        </div>

    </section>
    <br>

<section class="section">
        <div class="table-container">
            <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                <thead>
                <tr>
                    <th>Municipio</th>
                    <th>Colonia</th>
                    <th>Calle</th>
                    <th>Fecha de creación</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @forelse($sucursals as $sucursal)
                    <tr>
                        <td>{{ $sucursal->Municipio}}</td>
                        <td>{{ $sucursal->Colonia}}</td>
                        <td>{{ $sucursal->Calle}}</td>
                        <td>{{ $sucursal->created_at}}</td>
                        <td>
                           <form action="{{route('sucursals.destroy',$sucursal->id)}}" method="POST">
                                <a class="button is-success is-small" href="{{route('sucursals.show',$sucursal->id)}}">Ver</a>
                                <a class="button is-info is-small" href="{{route('sucursals.edit',$sucursal->id)}}">Editar</a>
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
    </left>
