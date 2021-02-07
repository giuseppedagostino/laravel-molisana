@extends('layouts.main-layout')

@section('content')

<div class="container">
  <div class="product_wrapper">
    <h2>{{ $product["titolo"] }}</h2>
    <h3>Tipologia: {{ $product["tipo"] }}</h3>
    <h3>Peso: {{ $product["peso"] }}</h3>
    <h4>{{ $product["descrizione"] }}</h4>
  </div>
</div>

@endsection