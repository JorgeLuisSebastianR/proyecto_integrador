@extends('layout.layout')
@section('content')

<section class="hero  is-dark">
  <div class="hero-body">
      <center>
      <font size="8">
        <figure class="image is-128x128">
            <img src="{{ asset('assets/images/diamante.png') }}">
        </figure>
            </figure>
                <b>Diamante Azúl</b><br />
            </font>
    <p class="subtitle" size="5">
      <i>Carpintería</i>
    </p>
    </center>
  </div>
</section>
    
<section class="section">
<br><br>
    <div class="table-container" align="center">

        <table class="">
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
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
                    <td><font color="white">-------</font></td>
                    <td>
                        <center>
                        <figure class="image is-128x128">
                            <img src="{{ asset('assets/images/articulo.png') }}">
                        </figure>
                        <a class="button is-warning" href="/articulos/">Registrar Artículo</a>
                        </center>
                    </td>
                    <td><font color="white">-------</font></td>
                    <td>
                        <center>
                        <figure class="image is-128x128">
                            <img src="{{ asset('assets/images/cliente.png') }}">
                        </figure>
                        <a class="button is-warning" href="/customers/">Registrar Cliente</a>
                        </center>
                    </td>
                    <td><font color="white">-------</font></td>
                    <td>
                        <center>
                        <figure class="image is-128x128">
                            <img src="{{ asset('assets/images/herramienta.png') }}">
                        </figure>
                        <a class="button is-warning" href="/herramientas/">Registrar Herramienta</a>
                        </center>
                    </td>
                    <td><font color="white">-------</font></td>
                    <td>
                        <center>
                        <figure class="image is-128x128">
                            <img src="{{ asset('assets/images/pedido.png') }}">
                        </figure>
                        <a class="button is-warning" href="/pedidos/">Registrar Pedido</a>
                        </center>
                    </td>
                    <td><font color="white">-------</font></td>
                    <td>
                        <center>
                        <figure class="image is-128x128">
                            <img src="{{ asset('assets/images/sucursal.png') }}">
                        </figure>
                        <a class="button is-warning" href="/campinterias/">Registrar Sucursal</a>
                        </center>
                    </td>
                </tr>
            </tbody>

        </table>
    </div>
</section>