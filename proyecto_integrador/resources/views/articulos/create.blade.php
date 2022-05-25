@extends('layout.layout')
@section('content')
    <section class="hero is-link">
        <div class="hero-body">
            <p class="title">
                Formulario para registrar una nuevo Articulo
            </p>
        </div>
    </section>
    <section class="section">
        <form action="{{ route('articulos.store') }}" method="POST">
            @csrf
                <div class="column">
                    <div>
                        <label for="">Nombre: </label>
                        <input class="input is-large" type="text" name="Nombre" >
                    </div>
                    
                    <div>
                        <label for="">Tamaño: </label>
                        <input class="input is-large" type="decimal" name="Tamaño" >
                    </div>

                    <div>
                        <label for="">Color: </label>
                        <input class="input is-large" type="text" name="Color" >
                    </div>

                    <div>
                        <label for="">Precio: </label>
                        <input class="input is-large" type="decimal" name="Precio" >
                    </div>
                    
                    <div>
                        <label for="">Descripcion: </label>
                        <input class="input is-large" type="text" name="Descripcion" >
                    </div>
                                        <!---Nueva columna -->
                    <div>
                        <label for="">Tipo: </label>
                        <select class="input is-large" name="Tipo" id="">
                            <option value="Campestre">Campestre</option>
                            <option value="Minimalista">Minimalista</option>
                            <option value="Rustico">Rustico</option> 
                        </select>
                    </div>
                   
                 </div>
            <div>
            <div class="is-flex is-justify-content-space-around">
                <a href="{{ url('articulos/') }}" class="button is-danger is-large">X Cancelar</a>
                <input class="button is-light is-large" type="reset" value="Restablecer">
                <input class="button is-info is-large" type="submit" value="Guardar">
            </div>
          </div>
        </form>
    </section>

@endsection
