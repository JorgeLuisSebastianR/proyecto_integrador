@extends('layout.layout')
@section('content')

    <section class="hero is-link">
        <div class="hero-body">
            <p class="title">
                pedidos
            </p>
            <a class="button is-info" href="/pedidos/create">Agregar</a>
        </div>
    </section>


    <br>
    <p align="right">
        <a href="{{ route('') }}" class="button is-danger is-outlined">
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
                    <th>Hora</th>

                </tr>
                </thead>
                <tbody>
                @forelse($pedidos as $pedido)
                    <tr>
                        <td>{{ $pedido->Fecha}}</td>
                        <td>{{ $pedido->Hora}}</td>
                        <td>{{ $campinteria->created_at}}</td>
                        <td>
                           <form action="{{route('campinterias.destroy',$campinteria->id)}}" method="POST">
                                <a class="button is-success is-small" href="{{route('campinterias.show',$campinteria->id)}}">Ver</a>
                                <a class="button is-info is-small" href="{{route('campinterias.edit',$campinteria->id)}}">Editar</a>
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
