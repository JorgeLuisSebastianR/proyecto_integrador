@extends('layout.layout')
@section('content')
<!-- <section class="hero  is-black">
  <div class="hero-body">
    <div class="columns">
        <div class="column is-4"><br>
        <a href="/modulos/" class="button is-danger">Regresar</a>
            <a class="button is-info" href="/maderas/create">Agregar nueva madera</a><br>
        </div>
        <div class="column is-1" align="right">
        <figure class="image is-64x64">
                <img src="{{ asset('assets/images/madera2.png') }}">
            </figure>
            </div>
        <div class="column" align="justify center">
        <font size="6" style="monospace">Madera
        </font>     
        </div>
        
  </div>
</section> -->
<section class="hero is-black">
        <div class="hero-body">
        <center>
            <font size="6">
            Listado de Madera
            </font>
        </center>
            <a href="/modulos/" class="button is-danger">Regresar</a>
            <a class="button is-info" href="/maderas/create">Agregar nueva madera</a>
        </div>

    </section>


<section class="section">
<div align="right">
        <a href="{{ route('exportToPDFMaderas') }}" class="button is-danger is-outlined">Descargar Reporte en PDF</a>
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
                        <td>{{ $madera->Pulgada}}</td>
                        <td>{{ $madera->Cantidad}}</td>
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

