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

    {{-- includo il codice dell'header per non ripeterlo poi in tutte le pagine, Laravel utilizza la DOT NOTATION --}}
    @include('partials.header')

    {{-- main --}}
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
              <a href="#">{{ $pasta["titolo"] }}</a>
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
              <a href="#">{{ $pasta["titolo"] }}</a>
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
              <a href="#">{{ $pasta["titolo"] }}</a>
            </div>
          </div>
          @endforeach
        </div>

      </section>
    </main>
    {{-- /main --}}

    @include('partials.footer')
    
  </body>
</html>