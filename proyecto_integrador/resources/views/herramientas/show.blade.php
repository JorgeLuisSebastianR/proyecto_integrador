@extends('layout.layout')
@section('content')

<section class="section">
    <div class="columns is-mobile is-centered">
        <div class="column is-half-width">
            <center><br>
            <font size="8">
            <b>Información general de herramienta:</b> {{ $herramienta->nombre }} {{ $herramienta->marca }}<br><br>
            </font>
            </center>
        </div>
    </div>

    <div class="columns is-mobile is-centered">
        <justify>
        <div class="column is-half-width">
            <h3><b>Nombre: </b> {{ $herramienta->nombre }}</h3><br>
            <h3><b>Marca: </b> {{ $herramienta->marca }}</h3><br>
            <h3><b>Modelo: </b> {{ $herramienta->modelo }}</h3><br>
            <h3><b>Descripción: </b> {{ $herramienta->descripcion }}</h3><br>
            <h3><b>Cantidad disponible:</b> {{ $herramienta->cantidad }}</h3><br><br>
            <center>
            <a href="/herramientas" class="button is-medium is-primary">Regresar</a>
            <a href="{{ route('herramientas.edit', $herramienta->id) }}" class="button is-medium is-info">Editar</a>
            
            </center>
        </div>
        </justify>
    </div>
</section>

@endsection