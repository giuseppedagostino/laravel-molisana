<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- titolo --}}
    <title>La Molisana - Home</title>
    {{-- css--}}
    <link rel="stylesheet" href={{ asset("css/app.css") }}>
    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.css" integrity="sha512-9iWaz7iMchMkQOKA8K4Qpz6bpQRbhedFJB+MSdmJ5Nf4qIN1+5wOVnzg5BQs/mYH3sKtzY+DOgxiwMz8ZtMCsw==" crossorigin="anonymous" />
  </head>

  <body>

    {{-- includo il codice dell'header per non ripeterlo poi in tutte le pagine, Laravel utilizza la DOT NOTATION --}}
    @include('partials.header')

    {{-- "il layout di base è questo poi ogni pagina al posto del contenuto segnato con yield avrà il suo contenuto" --}}
    @yield('content')

    @include('partials.footer')
    
  </body>
</html>