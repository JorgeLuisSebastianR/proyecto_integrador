@extends('layout.layout')
@section('content')

<section class="hero is-link">
    <div class="hero-body">
        <p class="title">
            Formulario para registrar un nuevo cliente
        </p>
    </div>
</section>

<section class="section">
    <form action="{{ route('customers.store') }}" method="post">
        @csrf
        <div class="columns">

            <div class="column">
                <div>
                    <label for="">Nombre: </label>
                    <input class="input is-large" type="text" name="nombre" id="">
                </div>
            </div>
        </div>

        <div>
            <div class="is-flex is-justify-content-space-around">
                <a href="{{ url('customers/') }}" class="button is-danger is-large">X Cancelar</a>
                <input class="button is-light is-large" type="reset" value="Restablecer">
                <input class="button is-link is-large" type="submit" value="Guardar">
            </div>
        </div>
    </form>
</section>