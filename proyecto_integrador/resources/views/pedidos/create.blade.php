@extends('layout.layout')
@section('content')
    <section class="hero is-black">
        <div class="hero-body">
        <font size="6">
            Formulario para ajustar fecha de entrega del pedido
    </font>
        </div>
    </section>

    <section class="section">

        <form action="{{ route('pedidos.store') }}" method="POST">
            @csrf
                <div class="column">
                  <div>
                      <label for="">Sucursal: </label><br>
                      <select name ="idSucursal" class="column is-one-quarter">
                          @forelse($sucursals as $sucursal)
                        <option value="{{$sucursal['id']}}">
                            {{$sucursal->Calle}}
                            {{$sucursal->Colonia}}
                            {{$sucursal->Municipio}}
                        </option>
                        @empty
                        <p>no hay Sucursal</p>
                    @endforelse
                      </select>
                  </div>

                <div>
                    <label for="">Cliente: </label>
                        <select name ="idCustomer" class="column is-one-quarter">
                            @forelse($customers as $customer)
                          <option value="{{$customer['id']}}">{{$customer->nombre}}</option>
                          @empty
                          <p>no hay Cliente</p>
                      @endforelse
                        </select>
                </div>

                    <div>
                        <label for="">Fecha de entra: </label>
                        <input class="column is-one-quarter" type="date" name="Fecha" >
                    </div>
                    <div>
                        <label for="">Hora de entrega: </label>
                        <input class="column is-one-quarter" type="time" name="Hora" >
                    </div>
                 </div>
            <div>
            <div class="is-flex is-justify-content-space-around">
                <a href="{{ url('pedidos/') }}" class="button is-danger is-large">X Cancelar</a>
                <input class="button is-light is-large" type="reset" value="Restablecer">
                <input class="button is-info is-large" type="submit" value="Guardar">
            </div>
          </div>
        </form>
    </section>

@endsection
