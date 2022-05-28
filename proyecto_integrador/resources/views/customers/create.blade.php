@extends('layout.layout')
@section('content')

<section class="hero is-black">
    <div class="hero-body">
        <center>
        <font size="6">
         Formulario para registrar un nuevo cliente
    </font>
        </center>
    </div>
</section>

<section class="section">
    <form action="{{ route('customers.store') }}" method="post">
        @csrf
        <div class="columns">

            <div class="column">
                <div>
                    <label for=""><b>Nombre<font color="red">*</font>: </b></label>
                    <input class="input is-large" type="text" name="nombre" id="">
                </div>
                <div>
                    <label for=""><b>Apellido Paterno<font color="red">*</font>: </b></label>
                    <input class="input is-large" type="text" name="apellidoPaterno" id="">
                </div>
                <div>
                    <label for=""><b>Apellido Materno<font color="red">*</font>: </b></label>
                    <input class="input is-large" type="text" name="apellidoMaterno" id="">
                </div>
                <div>
                    <label for=""><b>Telefono<font color="red">*</font>: </b></label>
                    <input class="input is-large" type="text" name="telefono" id="">
                </div>
                <div>
                    <label for=""><b>Correo Electrónico: </b></label>
                    <input class="input is-large" type="text" name="correoElectronico" id="">
                </div>
            </div>
            <div class="column">
                <div>
                    <label for=""><b>Calle<font color="red">*</font>: </b></label>
                    <input class="input is-large" type="text" name="calle" id="">
                </div>
                <div>
                    <label for=""><b>Número de Casa<font color="red">*</font>: </b></label>
                    <input class="input is-large" type="text" name="numeroCasa" id="">
                </div>
                <div>
                    <label for=""><b>Colonia<font color="red">*</font>: </b></label>
                    <input class="input is-large" type="text" name="colonia" id="">
                </div>
                <div>
                    <label for=""><b>Municipio<font color="red">*</font>: </b></label>
                    <input class="input is-large" type="text" name="municipio" id="">
                </div>
                <div>
                    <label for=""><b>Código Postal<font color="red">*</font>: </b></label>
                    <input class="input is-large" type="text" name="codigoPostal" id="">
                </div>
            </div>
        </div>

        <div>
            <div class="is-flex is-justify-content-space-around">
                <a href="{{ url('customers/') }}" class="button is-danger is-large">X Cancelar</a>
                <input class="button is-light is-large" type="reset" value="Restablecer">
                <input class="button is-info is-large" type="submit" value="Guardar">
            </div>
        </div>
    </form>
</section>
