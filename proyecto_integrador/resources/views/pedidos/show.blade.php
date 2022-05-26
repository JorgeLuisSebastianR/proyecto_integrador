//njnj

@extends('layout.layout')
@section('content')
<section class="hero is-link">
    <div class="hero-body">
        <p class="title">
            pedidos
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
            <h3><b>Fecha:</b>   {{ $pedido->Fecha}}</h3><br>
            <h3><b>Hora:</b>    {{ $pedido->Hora}}</h3><br>
            <center>
            <a href="/pedidos" class="button is-medium is-primary">Regresar </a>
              <a href="{{ route('pedidos.edit', $pedido->id) }}" class="button is-medium is-info">Editar</a>
            </center>
        </div>
        </justify>
    </div>
</section>
