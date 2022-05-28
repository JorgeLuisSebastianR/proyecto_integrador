@extends('layout.layout')
@section('content')

<section class="hero is-black">
    <div class="hero-body">
        <center>
        <font size="6">
                Formulario para registrar una nueva herramienta
            </font>
        </center>
    </div>
</section>

<section class="section">
    <form action="{{ route('herramientas.store') }}" method="post">
        @csrf
        <div class="columns">

            <div class="column">
                <div>
                    <label for=""><b>Nombre<font color="red">*</font>: </b></label>
                    <input class="input is-large" type="text" name="nombre" id="">
                </div>
                <div>
                    <label for=""><b>Marca<font color="red">*</font>: </b></label>
                    <input class="input is-large" type="text" name="marca" id="">
                </div>
                <div>
                    <label for=""><b>Modelo: </b></label>
                    <input class="input is-large" type="text" name="modelo" id="">
                </div>
                <div>
                    <label for=""><b>Descripción: </b></label>
                    <textarea class="input is-large" name="descripcion" id=""rows="5"></textarea>
                </div>
                <div>
                    <label for=""><b>Cantidad<font color="red">*</font>: </b></label>
                    <input class="input is-large" type="number" name="cantidad" step="1" min="1" id="">
                </div>
            </div>
        </div>

        <div>
            <div class="is-flex is-justify-content-space-around">
                <a href="{{ url('herramientas/') }}" class="button is-danger is-large">X Cancelar</a>
                <input class="button is-light is-large" type="reset" value="Restablecer">
                <input class="button is-info is-large" type="submit" value="Guardar">
            </div>
        </div>
    </form>
</section>
