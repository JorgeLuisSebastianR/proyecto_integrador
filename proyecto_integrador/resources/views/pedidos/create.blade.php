@extends('layout.layout')
@section('content')
    <section class="hero is-link">
        <div class="hero-body">
            <p class="title">
                Formulario para ajustar fecha de entrega del pedido
            </p>
        </div>
    </section>
    <section class="section">
        <form action="{{ route('pedidos.store') }}" method="POST">
            @csrf
                <div class="column">
                <label for="">Cliente: </label><br>
                <div class="select" >
                    <select style="width:310px">
                        <option>Select dropdown</option>
                        <option>With options</option>
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
