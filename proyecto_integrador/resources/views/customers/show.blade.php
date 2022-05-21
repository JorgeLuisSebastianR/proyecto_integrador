@extends('layout.layout')
@section('content')

<section class="section">
    <div class="columns">
        <div class="column is-one-third">
            <a href="/customers" class="button is-primary">
                Regresar
            </a>
        </div>
        <div class="column">
            <p class="title">
                Detalles de {{ $customer->nombre }} 
            </p>
        </div>
    </div>
</section>

@endsection