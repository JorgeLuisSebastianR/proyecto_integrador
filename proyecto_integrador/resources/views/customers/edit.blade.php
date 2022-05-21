@extends('layout.layout')
@section('content')

<section class="hero is-success">
    <div class="hero-body">
        <center>
        <p class="title">
            <b>Formulario para editar la iformación de: </b> {{ $customer->nombre }} {{ $customer->apellidoPaterno }}
        </p>
        </center>
    </div>
</section>

<section class="section">
    <form action="{{ route('customers.update', $customer->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="columns">

            <div class="column">
                <div>
                    <label for="">Nombre<font color="red">*</font>: </label>
                    <input class="input is-large" type="text" value=" {{ $customer->nombre }}" name="nombre" id="">
                </div>
                <div>
                    <label for="">Apellido Paterno<font color="red">*</font>: </label>
                    <input class="input is-large" type="text" value=" {{ $customer->apellidoPaterno }}" name="apellidoPaterno" id="">
                </div>
                <div>
                    <label for="">Apellido Materno<font color="red">*</font>: </label>
                    <input class="input is-large" type="text" value=" {{ $customer->apellidoMaterno }}" name="apellidoMaterno" id="">
                </div>
                <div>
                    <label for="">Telefono<font color="red">*</font>: </label>
                    <input class="input is-large" type="text" value=" {{ $customer->telefono }}" name="telefono" id="">
                </div>
                <div>
                    <label for="">Correo Electrónico: </label>
                    <input class="input is-large" type="text" value=" {{ $customer->correoElectronico }}" name="correoElectronico" id="">
                </div>
            </div>
            <div class="column">
                <div>
                    <label for="">Calle<font color="red">*</font>: </label>
                    <input class="input is-large" type="text" value=" {{ $customer->calle }}" name="calle" id="">
                </div>
                <div>
                    <label for="">Número de Casa<font color="red">*</font>: </label>
                    <input class="input is-large" type="text" value=" {{ $customer->numeroCasa }}" name="numeroCasa" id="">
                </div>
                <div>
                    <label for="">Colonia<font color="red">*</font>: </label>
                    <input class="input is-large" type="text" value=" {{ $customer->colonia }}" name="colonia" id="">
                </div>
                <div>
                    <label for="">Municipio<font color="red">*</font>: </label>
                    <input class="input is-large" type="text" value=" {{ $customer->municipio }}" name="municipio" id="">
                </div>
                <div>
                    <label for="">Código Postal<font color="red">*</font>: </label>
                    <input class="input is-large" type="text" value=" {{ $customer->codigoPostal }}" name="codigoPostal" id="">
                </div>
            </div>

        </div>
            <div class="is-flex is-justify-content-space-around">
                <a href="{{ url('customers/') }}" class="button is-danger is-large">X Cancelar</a>
                <input class="button is-link is-large" type="submit" value="Guardar">
            </div>
        </div>
    </form>
</section>
