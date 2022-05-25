
@extends('layout.layout')
@section('content')
<section class="section">
    <div class="columns is-mobile is-centered">
        <div class="column is-half-width">
            <center><br>
            <font size="8">
            <b>Informacición general de madera:</b>
            </font>
            </center>
        </div>
    </div>
    <div class="columns is-mobile is-centered">
        <justify>
        <div class="column is-half-width">
            <h3><b>Nombre:</b> {{ $madera->Nombre }} </h3><br>
            <h3><b>Color:</b> {{ $madera->TamaÃ±o }}</h3><br>
            <h3><b>Pulgadas:</b> {{ $madera->Pulgadas }}</h3><br>
            <h3><b>Cantidad:</b> {{ $madera->Cantidad }}</h3><br>
            
            
            <center>
            <a href="/maderas" class="button is-medium is-primary">Regresar</a>
            <a href="{{ route('maderas.edit', $madera->id) }}" class="button is-medium is-info">Editar</a>
            
            </center>
        </div>
        </justify>
    </div>
</section>

@endsection