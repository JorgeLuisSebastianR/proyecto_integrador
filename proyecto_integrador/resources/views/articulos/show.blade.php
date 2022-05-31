<!--codigo para botón ver-->

@extends('layout.layout')
@section('content')

<section class="section">
    <div class="columns is-mobile is-centered">
        <div class="column is-half-width">
            <center><br>
            <font size="8">
            <b>Información general de:</b> {{ $articulo->Nombre }} <br><br>
            </font>
            </center>
        </div>
    </div>
    <div class="columns is-mobile is-centered">
    @csrf
        @method('PUT')
        <justify>
        <div class="column is-half-width">
            <h3><b>Nombre:</b> {{ $articulo->Nombre }} </h3><br>

            <h3><b>Madera:</b> {{ $articulo->Madera->Nombre }}</h3><br>

            <h3><b>Tamaño:</b> {{ $articulo->Tamaño }}</h3><br>
            <h3><b>Color:</b> {{ $articulo->Color }}</h3><br>
            <h3><b>Precio:</b> {{ $articulo->Precio }}</h3><br>
            <h3><b>Descripcion:</b> {{ $articulo->Descripcion }}</h3><br>
            <h3><b>Tipo:</b> {{ $articulo->Tipo }}</h3><br>
           
            <center>
            <a href="/articulos" class="button is-medium is-primary">Regresar</a>
            <a href="{{ route('articulos.edit', $articulo->id) }}" class="button is-medium is-info">Editar</a>
            
            </center>
        </div>
        </justify>
    </div>
</section>

@endsection