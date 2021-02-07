{{-- questa pagina estende il contenuto del layout di base "layout-main" --}}
@extends('layouts.main-layout')

{{-- con il tag section vado ad inserire del contenuto proprio dove avevo inserito il segnaposto nel layout. Ovviamente devono avere lo stesso nome perchè funzioni --}}
@section('content')
<main>

  {{-- poichè le card sono tutte simili tra di loro io posso utilizzare gli include parametrici e passargli come secondo argomento un array che contiene soltanto i valori che vanno cambiati --}}

  {{-- LUNGHE --}}
  @include('partials.cards', [
    'title' => 'le lunghe',
    'pastaArray' => $lunghe
  ])

  {{-- CORTE --}}
  @include('partials.cards', [
    'title' => 'le corte',
    'pastaArray' => $corte
  ])

  {{-- CORTISSIME --}}
  @include('partials.cards', [
    'title' => 'le cortissime',
    'pastaArray' => $cortissime
  ])

</main>
@endsection