@extends('layout.layoutIndex')

@section('content')
  <a href={{ route('place.create') }}>CREATE NEW PLACE</a>
  <div class="container">
    @foreach ($places as $place)
      <div class="place">
        <p>Zona: {{ $place -> name}}</p>
        <p>Città: {{ $place -> city}}</p>
        <p>Nazione: {{ $place -> nation}}</p>
      </div>
    @endforeach
  </div>
@endsection
