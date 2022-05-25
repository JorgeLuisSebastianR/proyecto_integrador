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

      </div>

      <div class="">

      </div>

      <div class="">

      </div>


    </div>

  </form>
</section>
