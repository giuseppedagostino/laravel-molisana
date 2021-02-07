@extends('layouts.main-layout')

@section('content')

<div class="container_product">
  <div class="product_wrapper">

    {{-- prodotto precedente --}}
    @if ($id > 0)
      <div class="prev">
        <a href="{{ route('product', ['idProdotto' => $id - 1]) }}">
          <i class="fas fa-chevron-left"></i>
        </a>
      </div>
    @endif

    <h1>{{ $product["titolo"] }}</h1>
    <img src="{{ $product["src-h"] }}" alt="{{ $product["titolo"] }}">
    <img src="{{ $product["src-p"] }}" alt="{{ $product["titolo"] }}">
    <p>{!! $product["descrizione"] !!}</p>

    {{-- prodotto successivo --}}
    @if ($id < $max)
      <div class="next">
        <a href="{{ route('product', ['idProdotto' => $id + 1]) }}">
          <i class="fas fa-chevron-right"></i>
        </a>
      </div>
    @endif

  </div>
</div>

@endsection