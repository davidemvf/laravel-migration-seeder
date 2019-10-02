@extends('layout.layoutIndex')

@section('content')
  <a href="{{ route('place.index')}}">INDIETRO</a>
  <div class="add">
    <form action="{{ route('place.store') }}" method="post">
      @csrf
      @method("POST")
      <label for="name">Zona</label>
      <input type="text" name="name" value="">

      <label for="address">Indirizzo</label>
      <input type="text" name="address" value="">

      <label for="city">Città</label>
      <input type="text" name="city" value="">

      <label for="nation">Nazione</label>
      <input type="text" name="nation" value="">

      <button type="submit">Salva</button>
    </form>
  </div>
@endsection
