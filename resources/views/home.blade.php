{{-- questa pagina estende il contenuto del layout di base "layout-main" --}}
@extends('layouts.main-layout')

{{-- con il tag section vado ad inserire del contenuto proprio dove avevo inserito il segnaposto nel layout. Ovviamente devono avere lo stesso nome perchè funzioni --}}
@section('content')
<main>
  {{-- LUNGHE --}}
  <section class="container">
    <h2>le lunghe</h2>

    {{-- contenitore delle card --}}
    <div class="cards_rule">
      @foreach ($lunghe as $pasta)
      <div class="card">
        <img src="{{ $pasta["src"] }}" alt="{{ $pasta["titolo"] }}">
        <div class="card_text">
          <a href="{{ route('product', [ 'idProdotto' => $pasta['id']]) }}">{{ $pasta["titolo"] }}</a>
        </div>
      </div>
      @endforeach
    </div>

  </section>

  {{-- CORTE --}}
  <section class="container">
    <h2>le corte</h2>

    {{-- contenitore delle card --}}
    <div class="cards_rule">
      @foreach ($corte as $pasta)
      <div class="card">
        <img src="{{ $pasta["src"] }}" alt="{{ $pasta["titolo"] }}">
        <div class="card_text">
          <a href="{{ route('product', [ 'idProdotto' => $pasta['id']]) }}">{{ $pasta["titolo"] }}</a>
        </div>
      </div>
      @endforeach
    </div>

  </section>

  {{-- CORTISSIME --}}
  <section class="container">
    <h2>le cortissime</h2>

    {{-- contenitore delle card --}}
    <div class="cards_rule">
      @foreach ($cortissime as $pasta)
      <div class="card">
        <img src="{{ $pasta["src"] }}" alt="{{ $pasta["titolo"] }}">
        <div class="card_text">
          <a href="{{ route('product', [ 'idProdotto' => $pasta['id']]) }}">{{ $pasta["titolo"] }}</a>
        </div>
      </div>
      @endforeach
    </div>

  </section>
</main>
@endsection