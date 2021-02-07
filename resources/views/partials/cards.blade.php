<section class="container">
  <h2>{{ $title }}</h2>

  <div class="cards_rule">
    @foreach ($pastaArray as $pasta)
    <div class="card">
      <img src="{{ $pasta["src"] }}" alt="{{ $pasta["titolo"] }}">
      <div class="card_text">
        <a href="{{ route('product', [ 'idProdotto' => $pasta['id']]) }}">{{ $pasta["titolo"] }}</a>
      </div>
    </div>
    @endforeach
  </div>

</section>