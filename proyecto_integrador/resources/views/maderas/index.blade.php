@extends('layout.layout')
@section('content')

    <section class="hero is-link">
        <div class="hero-body">
            <p class="title">
                Maderas
            </p>
            <a class="button is-info" href="/maderas/create">Agregar</a>
        </div>

    </section>

<section class="section">
        <div class="table-container">
            <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                <thead>
                <tr>

                    <th>Nombre</th>
                    <th>Color</th>
                    <th>Pulgadas</th>
                    <th>Cantidad</th>
                    <th>Fecha</th>
                    <th>Acciones</th>

                </tr>
                </thead>
                <tbody>
                @forelse($maderas as $madera)
                    <tr>
                        <td>{{ $madera->Nombre}}</td>
                        <td>{{ $madera->Color}}</td>
                        <td>{{ $madera->Pulgada}}</td>
                        <td>{{ $madera->Cantidad}}</td>
                        <td>{{ $madera->created_at}}</td>
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
                    <h3>No hay datos en la base de datos</h3>
                @endforelse
            </table>
        </div>
    </left>
<!--codigo a para boton PDF -->
    <p align="right">
        <button href="" class="button is-danger is-outlined">
        <span>Descargar PDF</span>
        <span class="icon is-small">
          <i class="fas fa-times"></i>
        </span>
      </button>
   </p>
