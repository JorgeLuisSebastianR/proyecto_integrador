@extends('layout.layout')
@section('content')

<section class="hero  is-black">
  <div class="hero-body">
    <div class="columns">
        <div class="column is-1">
<figure class="image is-64x64">
            <img src="{{ asset('assets/images/diamante.png') }}">
        </figure>
        </div>
        <div class="column">
        <font size="6" style="monospace">
            Diamante Azúl<br />
        </font>     
        <p class="subtitle" size="5">
        <i>Carpintería</i>
        </p>
        </div>
        
  </div>
</section>
      
<section class="section">
<br>
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
                        <figure class="image is-64x64">
                            <img src="{{ asset('assets/images/madera1.png') }}">
                        </figure><br>
                        <a class="button is-dark is-small" href="/maderas/">Registrar Madera</a>
                        </center>
                    </td>
                    <td><font color="white">---------------------------</font></td>
                    <td>
                        <center>
                        <figure class="image is-64x64">
                            <img src="{{ asset('assets/images/articulo1.png') }}">
                        </figure><br>
                        <a class="button is-dark is-small" href="/articulos/">Registrar Artículo</a>
                        </center>
                    </td>
                    <td><font color="white">---------------------------</font></td>
                    <td>
                        <center>
                        <figure class="image is-64x64">
                            <img src="{{ asset('assets/images/cliente1.png') }}">
                        </figure><br>
                        <a class="button is-dark is-small" href="/customers/">Registrar Cliente</a>
                        </center>
                    </td>
                </tr>
                <tr><td><font color="white">------<br><br><br></font></td></tr>
                <tr>
                    <td>
                        <center>
                        <figure class="image is-64x64">
                            <img src="{{ asset('assets/images/herramienta1.png') }}">
                        </figure><br>
                        <a class="button is-dark is-small" href="/herramientas/">Registrar Herramienta</a>
                        </center>
                    </td>
                    <td><font color="white">---------------------------</font></td>
                    <td>
                        <center>
                        <figure class="image is-64x64">
                            <img src="{{ asset('assets/images/pedido1.png') }}">
                        </figure><br>
                        <a class="button is-dark is-small" href="/pedidos/">Registrar Pedido</a>
                        </center>
                    </td>
                    <td><font color="white">---------------------------</font></td>
                    <td>
                        <center>
                        <figure class="image is-64x64">
                            <img src="{{ asset('assets/images/sucursal1.png') }}">
                        </figure><br>
                        <a class="button is-dark is-small" href="/sucursals/">Registrar Sucursal</a>
                        </center>
                    </td>
                </tr>
            </tbody>

        </table>
    </div>
</section>
