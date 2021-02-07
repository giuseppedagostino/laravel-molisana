@extends('layouts.main-layout')

@section('content')

<div class="container_product">
  <div class="product_wrapper">

    <div class="prev">
      <a href="{{ route('product', ['idProdotto' => $id - 1]) }}">
        <i class="fas fa-chevron-left"></i>
      </a>
    </div>

    <h1>{{ $product["titolo"] }}</h1>
    <img src="{{ $product["src-h"] }}" alt="{{ $product["titolo"] }}">
    <img src="{{ $product["src-p"] }}" alt="{{ $product["titolo"] }}">
    <p>{!! $product["descrizione"] !!}</p>

    <div class="next">
      <a href="{{ route('product', ['idProdotto' => $id + 1]) }}">
        <i class="fas fa-chevron-right"></i>
      </a>
    </div>

  </div>
</div>

@endsection