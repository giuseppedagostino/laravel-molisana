@extends('layouts.main-layout')

@section('content')

<div class="container_product">
  <div class="product_wrapper">
    <h1>{{ $product["titolo"] }}</h1>
    <img src="{{ $product["src-h"] }}" alt="{{ $product["titolo"] }}">
    <img src="{{ $product["src-p"] }}" alt="{{ $product["titolo"] }}">
    <p>{!! $product["descrizione"] !!}</p>
  </div>
</div>

@endsection