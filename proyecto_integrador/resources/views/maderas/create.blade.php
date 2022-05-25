@extends('layout.layout')
@section('content')
<section class="hero is-link">
  <div class="hero-body">
    <p class="title">
        Formulario para llenar datos de maderas
    </p>
  </div>
</section>

<section class="">
  <form action="{{ route('maderas.store') }}" method="POST">
    @csrf

    <div class="culumn">

      <div class="">
        <label for="">Nombre: </label>
        <input class="input is-large" type="text" name="Nombre">
      </div>

      <div class="">
        <label for="">Color: </label>
        <input class="input is-large" type="text" name="Color">
      </div>

      <div class="">
        <label for="">Pulgadas: </label>
        <input class="input is-large" type="text" name="Pulgadas">
      </div>

      <div class="">
        <label for="">Cantidad: </label>
        <input class="input is-large" type="text" name="Cantidad">
      </div>

      <div class="is-flex is-justify-content-space-around">
          <a href="{{ url('maderas/') }}" class="button is-danger is-large">X Cancelar</a>
          <input class="button is-light is-large" type="reset" value="Restablecer">
          <input class="button is-info is-large" type="submit" value="Guardar">
      </div>

    </div>

  </form>
</section>

@endsection
