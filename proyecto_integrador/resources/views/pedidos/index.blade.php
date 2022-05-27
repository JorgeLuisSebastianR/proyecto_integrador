@extends('layout.layout')
@section('content')

    <section class="hero is-link">
        <div class="hero-body">
            <p class="title">
                Pedidos
            </p>
            <a href="/modulos/" class="button is-danger">Regresar</a>
            <a class="button is-info" href="/pedidos/create">Agregar</a>
        </div>
    </section>


    <br>
    <p align="right">
        <a  class="button is-danger is-outlined">
        <span>Descargar PDF</span>
        <span class="icon is-small">
          <i class="fas fa-times"></i>
        </span>
      </a>
    </p>

<section class="section">
        <div class="table-container">
            <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Hora de registro</th>
                      <th>articulo</th>
                    <th>Acciones</th>
                </tr>
                </thead>

                <tfoot>
                  <tr>
                      <th>Fecha</th>
                      <th>Hora</th>
                      <th>articulo</th>
                    <th>Acciones</th>
                  </tr>
                </tfoot>

                <tbody>
                @forelse($pedidos as $pedido)
                    <tr>
                        <td>{{ $pedido->Fecha}}</td>
                     <!--comulma para mostrar la hora de registro-->
                        <td>{{ $pedido->created_at}}</td>
                        <td>
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
                    <h3>No hay datos en la base de datos</h3>
                @endforelse
            </table>
        </div>
    </left>
