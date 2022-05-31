@extends('layout.layout')
@section('content')
<section class="hero is-black">
    <div class="hero-body">
        <center>
            <font size="6">
                Listado de Pedidos
            </font>
        </center>
        <a href="/modulos/" class="button is-danger">Regresar</a>
        <a class="button is-info" href="/pedidos/create">Agregar un nuevo pedido</a>
    </div>
</section>

<section class="section">

    <div align="right">
        <a href="#" class="button is-danger is-outlined">Descargar Reporte en PDF (aún no jala xd)</a>
    </div><br><br>

        <div class="table-container">
            <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                <thead>
                <tr align="center">
                  <th>Cliente</th>
                    <th>Fecha de entra</th>
                    <th>Hora de registro</th>
                      <th>Artículo</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tfoot>
                  <tr align="center">
                    <th>Cliente</th>
                      <th>Fecha de entra</th>
                      <th>Hora de registro</th>
                      <th>Artículo</th>
                    <th>Acciones</th>
                  </tr>
                </tfoot>
                <tbody>
                @forelse($pedidos as $pedido)
                    <tr align="center">
                        <td>{{$pedido->Customer->nombre}}</td>
                        <td>{{$pedido->Fecha}}</td>
                     <!--comulma para mostrar la hora de registro-->
                        <td>{{ $pedido->Hora }}</td>
                        <td align="center">
                             <form action="{{route('pedidos.destroy',$pedido->id)}}" method="POST">
                               <a class="button is-success is-small" href="{{route('pedidoarticulos.index',$pedido->id)}}">Agregar</a>
                            </form>

                        <td align="center">
                           <form action="{{route('pedidos.destroy',$pedido->id)}}" method="POST">
                                <a class="button is-success is-small" href="{{route('pedidos.show',$pedido->id)}}">Ver</a>
                                <a class="button is-info is-small" href="{{route('pedidos.edit',$pedido->id)}}">Editar</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button is-danger is-small">Eliminar</button>
                            </form>
                        </td>
                </tbody>
                @empty
                    <font size="5">
                        <div class="notification is-warning is-small is-with"><br>
                            <center>Aún no cuenta con pedidos almacenadas, puede registrar un nuevo pedido <a href="/pedidos/create">aquí</a>.</center><br>
                        </div>
                    </font><br><br><br><br>
                @endforelse
            </table>
        </div>
    </left>
