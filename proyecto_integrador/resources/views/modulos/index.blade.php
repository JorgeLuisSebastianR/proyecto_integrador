@extends('layout.layout')
@section('content')

<section class="hero is-success">
    <div class="hero-body">
        <center>
            <font size="8">
                <b>Listado de Clientes </b><br />
            </font>
        </center>
        <a class="button is-info" href="/customers/create">Agregar nuevo cliente</a>
    </div>
</section>
    
<section class="section">

    <div align="right">
        <a href="#" class="button is-danger is-outlined">Descargar PDF</a>
    </div><br><br>

    <div class="table-container">

        <table class="">
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>
                        <center>
                        <figure class="image is-128x128">
                            <img src="{{ asset('assets/images/madera.png') }}">
                        </figure>
                        <a class="button is-warning" href="/maderas/">Registrar Madera</a>
                        </center>
                    </td>
                    <th></th>
                    <td>
                        <center>
                        <figure class="image is-128x128">
                            <img src="{{ asset('assets/images/articulo.png') }}">
                        </figure>
                        <a class="button is-info" href="/articulos/">Registrar Artículo</a>
                        </center>
                    </td>
                    <td>
                        <center>
                        <figure class="image is-128x128">
                            <img src="{{ asset('assets/images/cliente.png') }}">
                        </figure>
                        <a class="button is-success" href="/customers/">Registrar Cliente</a>
                        </center>
                    </td>
                    <td>
                        <center>
                        <figure class="image is-128x128">
                            <img src="{{ asset('assets/images/herramienta.png') }}">
                        </figure>
                        <a class="button is-danger" href="/herramientas/">Registrar Herramienta</a>
                        </center>
                    </td>
                    <td>
                        <center>
                        <figure class="image is-128x128">
                            <img src="{{ asset('assets/images/pedido.png') }}">
                        </figure>
                        <a class="button is-info" href="/pedidos/">Registrar Pedido</a>
                        </center>
                    </td>
                    <td>
                        <center>
                        <figure class="image is-128x128">
                            <img src="{{ asset('assets/images/sucursal.png') }}">
                        </figure>
                        <a class="button is-info" href="/campinterias/">Registrar Sucursal</a>
                        </center>
                    </td>
                </tr>
            </tbody>

        </table>
    </div>
</section>