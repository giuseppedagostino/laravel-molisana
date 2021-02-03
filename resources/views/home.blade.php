<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- titolo --}}
    <title>La Molisana - Home</title>
    {{-- css--}}
    <link rel="stylesheet" href={{ asset("css/app.css") }}>
  </head>

  <body>

    {{-- header --}}
    <header>
      {{-- OGNI VOLTA CHE USO ASSET PARTE DA PUBLIC --}}
      <img src="{{ asset('img/marchio-sito-test.png') }}" alt="La Molisana">

      <ul class="list-inline">
        <li class="active">
          <a href="#">Home</a>
        </li>
        <li>
          <a href="#">Prodotti</a>
        </li>
        <li>
          <a href="#">News</a>
        </li>
      </ul>
    </header>
    {{-- /header --}}

    {{-- main --}}
    <main>
      <section class="container">
        <h2>le lunghe</h2>

        {{-- contenitore delle card --}}
        <div class="cards_rule">
          @foreach ($lunghe as $pasta)
          <div class="card">
            <img src="{{ $pasta["src"] }}" alt="{{ $pasta["titolo"] }}">
            <div class="card_text">
              <a href="#">{{ $pasta["titolo"] }}</a>
            </div>
          </div>
          @endforeach
        </div>

      </section>
    </main>
    {{-- /main --}}

    {{-- footer --}}

    <footer>
      <h1>FOOTER</h1>
    </footer>
    {{-- /footer --}}
    
  </body>
</html>