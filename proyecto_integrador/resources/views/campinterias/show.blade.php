@extends('layout.layout')
@section('content')
<section class="hero is-link">
    <div class="hero-body">
        <p class="title">
            Carpinteria Diamante Azul
        </p>
    </div>
</section>
<section class="section">
    <div class="columns is-mobile is-centered">
        <div class="column is-half-width">
            <center><br>
            <font size="8">
            <b>Información de la sucursal</b>
            </font>
            </center>
        </div>
    </div>
    <div class="columns is-mobile is-centered">
        <justify>
        <div class="column is-half-width">
            <h3><b>Telefono:</b>          {{ $campinteria->Telefono}}</h3><br>
            <h3><b>Calle:</b>             {{ $campinteria->Calle}}</h3><br>
            <h3><b>Numero Exterior:</b>   {{ $campinteria->NumeroExterior}}</h3><br>
            <h3><b>Colonia:</b>           {{ $campinteria->Colonia}}</h3><br>
            <h3><b>Municipio:</b>         {{ $campinteria->Municipio}}</h3><br>
            <h3><b>fecha de resgitro:</b> {{ $campinteria->created_at}}</h3><br>
            <center>
            <a href="/campinterias" class="button is-medium is-primary">Regresar</a>
              <a href="{{ route('campinterias.edit', $campinteria->id) }}" class="button is-medium is-info">Editar</a>
            </center>
        </div>
        </justify>
    </div>
</section>
