@extends('layout.layout')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@section('content')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
                                rel="stylesheet" />

                            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

                            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
                            </script>

                            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
                            </script>
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

                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Agregar</button>

                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">



                                  fdks;f'

                                  sd;f'
                                </div>
                              </div>
                            </div>

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
