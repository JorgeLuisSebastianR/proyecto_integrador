@extends('layout.layout')
@section('content')
    <section class="hero is-link">
        <div class="hero-body">
            <p class="title">
                Formulario para registrar pedidos
            </p>
        </div>
    </section>
    <section class="section">
        <form action="{{ route('campinterias.store') }}" method="POST">
            @csrf
                <div class="column">
                    <div>
                        <label for="">Fecha: </label>
                        <input class="input is-large" type="text" name="Telefono" >
                    </div>
                    <div>
                        <label for="">Hora: </label>
                        <input class="input is-large" type="text" name="Calle" >
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
