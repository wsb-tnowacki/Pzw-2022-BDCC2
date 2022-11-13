@extends('start.layout')
@section('tytul')Posty
@endsection
@section('naglowek')
Szczegóły postu
@endsection
@section('tresc')
<form method="GET" action="{{ route('posty.index') }}">
    <div class="form-group">
      <label for="tytul">Tytuł</label>
      <input type="text" class="form-control" value="{{ $post->tytul }}" id="tytul" name="tytul" disabled="disabled">
    </div>
    <div>
      Data powstania postu: <b>{{ date('j F Y H:m:i',strtotime($post->created_at)) }}</b><br />
      Data modyfikacji postu: <b>{{ date('j F Y H:m:i',strtotime($post->updated_at)) }}</b>
    </div>
    <div class="form-group">
        <label for="autor">Autor</label>
        <input type="text" class="form-control" value="{{ $post->autor }}" id="autor" name="autor" disabled="disabled">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" value="{{ $post->email }}" id="email" name="email" disabled="disabled">
    </div>
    <div class="form-group">
      <label for="tresc">Treść postu</label>
      <textarea class="form-control" id="tresc" name="tresc" rows="4" disabled="disabled"> {{ $post->tresc }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Powrót do listy</button>
  </form>
@endsection
