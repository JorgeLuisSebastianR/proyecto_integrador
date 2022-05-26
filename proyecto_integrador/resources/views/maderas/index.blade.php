@extends('layout.layout')
@section('content')

    <section class="hero is-warning">
        <div class="hero-body">
        <center>
            <font size="8">
                <b>Listado de Madera </b><br />
            </font>
        </center>
            <a class="button is-info" href="/maderas/create">Agregar nueva madera</a>
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
                    <th>Color</th>
                    <th>Pulgadas</th>
                    <th>Cantidad</th>
                    <th>Acciones</th>

                </tr>
                </thead>
                <tfoot>
                <tr>

                    <th>Nombre</th>
                    <th>Color</th>
                    <th>Pulgadas</th>
                    <th>Cantidad</th>
                    <th>Acciones</th>

                </tr>
                </tfoot>
                <tbody>
                @forelse($maderas as $madera)
                    <tr>
                        <td>{{ $madera->Nombre}}</td>
                        <td>{{ $madera->Color}}</td>
                        <td>{{ $madera->Pulgadas}}</td>
                        <td>{{ $maderas->created_at}}</td>
                        <td>
                           <form action="{{route('maderas.destroy',$madera->id)}}" method="POST">
                                <a class="button is-success is-small" href="{{route('maderas.show',$madera->id)}}">Ver</a>
                                <a class="button is-info is-small" href="{{route('maderas.edit',$madera->id)}}">Editar</a>
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
                        Aún no cuenta con madera almacenada, puede registrar una nueva madera <a href="/maderas/create">aquí</a>.</center><br>
                </div>
            </font><br><br><br><br>
                @endforelse
            </table>
        </div>
    </left>
<!--codigo a para boton PDF -->

