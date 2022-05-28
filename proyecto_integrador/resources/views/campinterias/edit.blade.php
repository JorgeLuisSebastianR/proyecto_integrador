@extends('layout.layout')
@section('content')
<section class="hero is-black">
    <div class="hero-body">
    <font size="6">
                Formulario para editar la información de sucursal
            </font>
    </div>
</section>
<section class="section">
    <form action="{{ route('campinterias.update', $campinteria->id) }}" method="POST">
        @csrf
        @method('PUT')
            <div class="column">
                <div>
                    <label for="">Telefono: </label>
                    <input class="input is-large" type="text" value="{{$campinteria->Telefono}}" name="Telefono" >
                </div>
                <div>
                    <label for="">Calle: </label>
                    <input class="input is-large" type="text" value="{{$campinteria->Calle}}" name="Calle" >
                </div>
                <div>
                    <label for="">Número exterior: </label>
                    <input class="input is-large" type="text" value="{{$campinteria->NumeroExterior}}" name="NumeroExterior" >
                </div>
                <div>
                    <label for="">Colonia: </label>
                    <input class="input is-large" type="text" value="{{$campinteria->Colonia}}" name="Colonia" >
                </div>
                <div>
                    <label for="">Municipio: </label>
                    <input class="input is-large" type="text" value="{{$campinteria->Municipio}}" name="Municipio" >
                </div>
             </div>
        <div>
        <div class="is-flex is-justify-content-space-around">
            <a href="{{ url('campinterias/') }}" class="button is-danger is-large">X Cancelar</a>
            <input class="button is-light is-large" type="reset" value="Restablecer">
            <input class="button is-info is-large" type="submit" value="Guardar">
        </div>
      </div>
    </form>
</section>

@endsection
