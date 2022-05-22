@extends('layout.layout')
@section('content')
    <section class="hero is-link">
        <div class="hero-body">
            <p class="title">
                Formulario para registrar una nueva Sucursal
            </p>
        </div>
    </section>
    <section class="section">
        <form action="{{ route('campinterias.store') }}" method="POST">
            @csrf
                <div class="column">
                    <div>
                        <label for="">Telefono: </label>
                        <input class="input is-large" type="text" name="Telefono" >
                    </div>
                    <div>
                        <label for="">Calle: </label>
                        <input class="input is-large" type="text" name="Calle" >
                    </div>
                    <div>
                        <label for="">Número exterior: </label>
                        <input class="input is-large" type="text" name="NumeroExterior" >
                    </div>
                    <div>
                        <label for="">Colonia: </label>
                        <input class="input is-large" type="text" name="Colonia" >
                    </div>
                    <div>
                        <label for="">Municipio: </label>
                        <input class="input is-large" type="text" name="Municipio" >
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
