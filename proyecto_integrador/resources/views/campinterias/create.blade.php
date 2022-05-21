@extends('layout.layout')
@section('content')

    <section class="hero is-link">
        <div class="hero-body">
            <p class="title">
                Formulario para registrar una nueva computadora
            </p>
        </div>
    </section>

    <section class="section">
        <form action="{{ route('campinterias.store') }}" method="post">
            @csrf
                <div class="column">

                    <div>
                        <label for="">Nombre: </label>
                        <input class="input is-large" type="text" name="Nombre" id="">
                    </div>

                    <div>
                        <label for="">Telefono: </label>
                        <input class="input is-large" type="text" name="Telefono" id="">
                    </div>

                    <div>
                        <label for="">Calle: </label>
                        <textarea class="input is-large" name="Calle" id="" cols="30" rows="5"></textarea>
                    </div>
                    <div>
                        <label for="">Número exterior: </label>
                        <textarea class="input is-large" name="NumeroExterior" id="" cols="30" rows="5"></textarea>
                    </div>
                    <div>
                        <label for="">Colonia: </label>
                        <textarea class="input is-large" name="Colonia" id="" cols="30" rows="5"></textarea>
                    </div>
                    <div>
                        <label for="">Municipio: </label>
                        <textarea class="input is-large" name="Municipio" id="" cols="30" rows="5"></textarea>
                    </div>

                 </div>

            <div>
            <div class="is-flex is-justify-content-space-around">

                <a href="{{ url('campinterias/') }}" class="button is-danger is-large">X Cancelar</a>

                <input class="button is-light is-large" type="reset" value="Restablecer">
                <input class="button is-link is-large" type="submit" value="Guardar">
            </div>
            </div>


        </form>
    </section>

@endsection
