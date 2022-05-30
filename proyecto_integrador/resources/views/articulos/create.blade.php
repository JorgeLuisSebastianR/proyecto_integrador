<!--codigo para botón crear-->
@extends('layout.layout')
@section('content')
    <section class="hero is-black">
        <div class="hero-body">
        <font size="6">
            Formulario para registrar un nuevo artículo
    </font>
        </div>
    </section>
    <section class="section">
        <form action="{{ route('articulos.store') }}" method="POST">
            @csrf


            <div class="columns">

                <div class="column">
                  <div>
                      <label for="">Madera: </label><br>
                      <select name ="idMadera" class="input is-large">
                        @forelse($maderas as $madera)
                        <option value="{{$madera['id']}}">
                          {{$madera->Nombre}}
                        </option>
                        @empty
                        <p>no hay Sucursal</p>
                        @endforelse
                      </select>
                  </div>
                    <div>
                        <label for="">Nombre<font color="red">*</font>: </label>
                        <input class="input is-large" type="text" name="Nombre" >
                    </div>

                    <div>
                        <label for="">Tamaño<font color="red">*</font>: </label>
                        <input class="input is-large" type="decimal" name="Tamaño" >
                    </div>

                    <div>
                        <label for="">Color<font color="red">*</font>: </label>
                        <input class="input is-large" type="text" name="Color" >
                    </div>
                </div>
                <div class="column">
                    <div>
                        <label for="">Precio<font color="red">*</font>: </label>
                        <input class="input is-large" type="decimal" name="Precio" >
                    </div>

                    <div>
                        <label for="">Descripcion: </label>
                        <input class="input is-large" type="text" name="Descripcion" >
                    </div>
                                        <!---Nueva columna -->
                    <div>
                        <label for="">Tipo<font color="red">*</font>: </label>
                        <select class="input is-large" name="Tipo" id="">
                            <option value="Campestre">Campestre</option>
                            <option value="Minimalista">Minimalista</option>
                            <option value="Rustico">Rustico</option>
                        </select>
                    </div>
                   <!--Apartado para botones guardar, cancelar y limpiar -->
                 </div>
            </div>
            <div class="is-flex is-justify-content-space-around">
                <a href="{{ url('articulos/') }}" class="button is-danger is-large">X Cancelar</a>
                <input class="button is-light is-large" type="reset" value="Restablecer">
                <input class="button is-info is-large" type="submit" value="Guardar">
            </div>
          </div>
        </form>
    </section>

@endsection
