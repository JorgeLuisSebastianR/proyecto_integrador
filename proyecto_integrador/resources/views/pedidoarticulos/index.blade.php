@extends('layout.layout')
@section('content')
<section class="hero is-black">
    <div class="hero-body">
        <center>
            <font size="6">
                lista de articulo del pedido
            </font>
        </center>
        <a href="/pedidos" class="button is-danger">Regresar</a>
        <a class="button is-info" href="/pedidoarticulos/create">Agregar Articulo</a>
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
                  <th>Nombre:</th>
                    <th>Precio de venta</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tfoot>
                  <tr align="center">
                    <th>Nombre:</th>
                      <th>Precio de venta</th>
                      <th>Acciones</th>
                  </tr>
                </tfoot>
                <tbody>
                @forelse($pedidoarticulos as $pedidoarticulo)
                    <tr align="center">
                        <td>
                          {{$pedidoarticulo->Articulo->Nombre}}
                        </td>
                        <td align="center">
                          {{$pedidoarticulo->Articulo->Precio}}
                        </td>
                        <td align="center">
                          <form action="{{route('pedidoarticulos.destroy',$pedidoarticulo->id)}}" method="POST">
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
