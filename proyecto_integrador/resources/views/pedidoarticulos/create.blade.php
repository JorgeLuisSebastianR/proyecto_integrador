@extends('layout.layout')
@section('content')
    <section class="hero is-black">
        <div class="hero-body">
          <font size="6">
            lista desplegable de los articulos
          </font>
        </div>
    </section>

    <section class="section">

        <form action="{{ route('pedidos.store') }}" method="POST">
            @csrf
                <div class="column">
                  <div>
                    <label for="">Articulos: </label><br>
                    <select name ="idArticulo" class="column is-one-quarter">
                        @forelse($articulos as $articulo)
                      <option value="{{$articulo['id']}}">{{$articulo->Nombre}}</option>
                      @empty
                      <p>no hay Sucursal</p>
                  @endforelse
                    </select>
                  <div>

                  </div>
                  </div>

            <div>
              <br><br><br>
            <div class="is-flex is-justify-content-space-around">
                <a href="{{ url('pedidoarticulos/') }}" class="button is-danger is-large">X Cancelar</a>
                <input class="button is-light is-large" type="reset" value="Restablecer">
                <input class="button is-info is-large" type="submit" value="Guardar">
            </div>
          </div>
        </form>
    </section>

@endsection
