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
            <b>Maderas</b>
            </font>
            </center>
        </div>
    </div>
    <div class="columns is-mobile is-centered">
        <justify>
        <div class="column is-half-width">
            <h3><b>Nombre:</b>          {{ $madera->Nombre}}</h3><br>
            <h3><b>Color:</b>             {{ $madera->Color}}</h3><br>
            <h3><b>Pulgadas:</b>   {{ $madera->Pulgadas}}</h3><br>
            <h3><b>Cantidad:</b>           {{ $madera->Cantidad}}</h3><br>
            <center>
            <a href="/maderas" class="button is-medium is-primary">Regresar</a>
              <a href="{{ route('maderas.edit', $madera->id) }}" class="button is-medium is-info">Editar</a>
            </center>
        </div>
        </justify>
    </div>
</section>
