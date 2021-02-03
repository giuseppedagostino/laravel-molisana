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
      <h1>Latest News</h1>
    </main>
    {{-- /main --}}

    @include('partials.footer')
    
  </body>
</html>