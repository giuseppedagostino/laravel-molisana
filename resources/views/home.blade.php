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
          <a href="#">HOME</a>
        </li>
        <li>
          <a href="#">PRODOTTI</a>
        </li>
        <li>
          <a href="#">NEWS</a>
        </li>
      </ul>
    </header>
    {{-- /header --}}

    {{-- main --}}
    <main>

    </main>
    {{-- /main --}}

    {{-- footer --}}
    <footer>
      <h1>FOOTER</h1>
    </footer>
    {{-- /footer --}}
    
  </body>
</html>