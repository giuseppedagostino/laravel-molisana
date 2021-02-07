<header>
  {{-- OGNI VOLTA CHE USO ASSET PARTE DA PUBLIC --}}
  <img src="{{ asset('img/marchio-sito-test.png') }}" alt="La Molisana">

  <ul>
    {{-- attribuisco la classe con il ternario. La funzione Route::currentRouteName() serve a prendere il nome della route attuale --}}
    <li class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}">
      <a href="{{ route('home') }}">Home</a>
    </li>
    {{-- quando clicco su prodotti mi rimanda subito al prodotto di id 0 --}}
    <li class="{{ Route::currentRouteName() == 'prodotto' ? 'active' : '' }}">
      <a href="{{ route('product', ['idProdotto' => 0]) }}">Prodotti</a>
    </li>
    <li class="{{ Route::currentRouteName() == 'news' ? 'active' : '' }}">
      <a href="{{ route('news') }}">News</a>
    </li>
  </ul>
</header>