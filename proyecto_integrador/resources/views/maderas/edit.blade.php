@extends('layout.layout')
@section('content')
<section class="hero is-success">
    <div class="hero-body">
        <center>
        <p class="title">
            <b>Formulario para editar maderas
        </p>
        </center>
    </div>
</section>
<section class="section">
    <form action="{{ route('maderas.update', $madera->id) }}" method="POST">
        @csrf
        @method('PUT')
            <div class="column">
                <div>
                    <label for="">Nombre: </label>
                    <input class="input is-large" type="text" value="{{$madera->Nombre}}" name="Nombre" >
                </div>
                <div>
                    <label for="">Color: </label>
                    <input class="input is-large" type="text" value="{{$madera->Color}}" name="Color" >
                </div>
                <div>
                    <label for="">Pulgadas: </label>
                    <input class="input is-large" type="text" value="{{$madera->Pulgadas}}" name="Pulgadas" >
                </div>
                <div>
                    <label for="">Cantidad: </label>
                    <input class="input is-large" type="text" value="{{$madera->Cantidad}}" name="Cantidad" >
                </div>
             </div>

        <div>
        <div class="is-flex is-justify-content-space-around">
            <a href="{{ url('maderas/') }}" class="button is-danger is-large">X Cancelar</a>
            <input class="button is-light is-large" type="reset" value="Restablecer">
            <input class="button is-info is-large" type="submit" value="Guardar">
        </div>
      </div>
    </form>
</section>

@endsection
