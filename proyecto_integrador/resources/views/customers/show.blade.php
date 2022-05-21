@extends('layout.layout')
@section('content')

<section class="section">
    <div class="columns is-mobile is-centered">
        <div class="column is-half-width">
            <center><br>
            <font size="8">
            <b>Información general de:</b> {{ $customer->nombre }} {{ $customer->apellidoPaterno }}<br><br>
            </font>
            </center>
        </div>
    </div>

    <div class="columns is-mobile is-centered">
        <justify>
        <div class="column is-half-width">
            <h3><b>Nombre completo:</b> {{ $customer->nombre }} {{ $customer->apellidoPaterno }} {{ $customer->apellidoMaterno }}</h3><br>
            <h3><b>Telefono:</b> {{ $customer->telefono }}</h3><br>
            <h3><b>Correo Electrónico:</b> {{ $customer->correoElectronico }}</h3><br>
            <h3><b>Calle:</b> {{ $customer->calle }}</h3><br>
            <h3><b>Número de Casa:</b> {{ $customer->númeroCalle }}</h3><br>
            <h3><b>Colonia:</b> {{ $customer->colonia }}</h3><br>
            <h3><b>Municipio:</b> {{ $customer->municipio }}</h3><br>
            <h3><b>Código Postal:</b> {{ $customer->codigoPostal }}</h3><br><br>
            <center>
            <a href="/customers" class="button is-medium is-primary">Regresar</a>
            <a href="{{ route('customers.edit', $customer->id) }}" class="button is-medium is-info">Editar</a>
            
            </center>
        </div>
        </justify>
    </div>
</section>

@endsection