@extends('layout.layout')
@section('content')
<section class="hero is-success">
    <div class="hero-body">
        <center>
        <p class="title">
            <b>Formulario para editar pedidos
        </p>
        </center>
    </div>
</section>
<section class="section">
    <form action="{{ route('pedidos.update', $pedido->id) }}" method="POST">
        @csrf
        @method('PUT')
            <div class="column">
                <div>
                    <label for="">Fecha: </label>
                    <input class="input is-large" type="text" value="{{$campinteria->Telefono}}" name="Fecha" >
                </div>
                <div>
                    <label for="">Hora: </label>
                    <input class="input is-large" type="text" value="{{$campinteria->Calle}}" name="Hora" >
                </div>
             </div>
        <div>
        <div class="is-flex is-justify-content-space-around">
            <a href="{{ url('pedidos/') }}" class="button is-danger is-large">X Cancelar</a>
            <input class="button is-light is-large" type="reset" value="Restablecer">
            <input class="button is-info is-large" type="submit" value="Guardar">
        </div>
      </div>
    </form>
</section>

@endsection
