@extends('layout.layout')
@section('content')
<section class="hero is-warning">
  <div class="hero-body">
    <p class="title" align="center">
        Formulario para registrar una nueva madera
    </p>
  </div>
</section>

<section class="section">
  <form action="{{ route('maderas.store') }}" method="POST">
    @csrf
    

    <div class="culumn">

      <div class="">
        <label for=""><b>Nombre<font color="red">*</font>: </b></label>
        <input class="input is-large" type="text" name="Nombre">
      </div>

      <div class="">
        <label for=""><b>Color<font color="red">*</font>: </b></label>
        <input class="input is-large" type="text" name="Color">
      </div>

      <div class="">
<<<<<<< HEAD
        <label for=""><b>Pulgadas<font color="red">*</font>: </b></label>
        <input class="input is-large" type="text" name="Pulgadas">
=======
        <label for="">Pulgadas: </label>
        <input class="input is-large" type="text" name="Pulgada">
>>>>>>> 934b724692bcdf9b84022e881a31eac93bab0077
      </div>

      <div class="">
        <label for=""><b>Cantidad<font color="red">*</font>: </b></label>
        <input class="input is-large" type="text" name="Cantidad">
      </div>
    </div>

      <div>
        <div class="is-flex is-justify-content-space-around">
          <a href="{{ url('maderas/') }}" class="button is-danger is-large">X Cancelar</a>
          <input class="button is-light is-large" type="reset" value="Restablecer">
          <input class="button is-info is-large" type="submit" value="Guardar">
        </div>
      </div>
<<<<<<< HEAD
=======
    </div>
>>>>>>> 934b724692bcdf9b84022e881a31eac93bab0077
  </form>
</section>

@endsection
