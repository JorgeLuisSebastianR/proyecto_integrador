@extends('layout.layout')
@section('content')
<section class="hero is-success">
    <div class="hero-body">
        <center>
        <p class="title">
            <b>Formulario para editar la iformación de la Sucursal
        </p>
        </center>
    </div>
</section>
<section class="section">
    <form action="{{ route('sucursals.update', $sucursal->id) }}" method="POST">
        @csrf
        @method('PUT')
            <div class="column">
                <div>
                    <label for="">Telefono: </label>
                    <input class="input is-large" type="text" value="{{$sucursal->Telefono}}" name="Telefono" >
                </div>
                <div>
                    <label for="">Calle: </label>
                    <input class="input is-large" type="text" value="{{$sucursal->Calle}}" name="Calle" >
                </div>
                <div>
                    <label for="">Número exterior: </label>
                    <input class="input is-large" type="text" value="{{$sucursal->NumeroExterior}}" name="NumeroExterior" >
                </div>
                <div>
                    <label for="">Colonia: </label>
                    <input class="input is-large" type="text" value="{{$sucursal->Colonia}}" name="Colonia" >
                </div>
                <div>
                    <label for="">Municipio: </label>
                    <input class="input is-large" type="text" value="{{$sucursal->Municipio}}" name="Municipio" >
                </div>
             </div>
        <div>
        <div class="is-flex is-justify-content-space-around">
            <a href="{{ url('sucursals/') }}" class="button is-danger is-large">X Cancelar</a>
            <input class="button is-light is-large" type="reset" value="Restablecer">
            <input class="button is-info is-large" type="submit" value="Guardar">
        </div>
      </div>
    </form>
</section>

@endsection
