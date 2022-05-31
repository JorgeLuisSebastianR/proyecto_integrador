@extends('layout.layout')
@section('content')
@csrf
@method('PUT')
<section class="hero is-black">
    <div class="hero-body">
        <center>
            <font size="6">
                lista de articulo del pedido {{ $pedido->id }}
            </font>
        </center>
        <a href="/pedidos" class="button is-danger">Regresar</a>
        <a class="button is-info" href="/herramientas/create">Agregar nueva herramienta</a>
    </div>
</section>
