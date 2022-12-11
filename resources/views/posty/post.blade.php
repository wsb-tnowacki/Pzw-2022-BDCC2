@extends('start.layout')
@section('tytul')Posty
@endsection
@section('naglowek')
Szczegóły postu
@endsection
@section('tresc')
<form method="POST" action="{{ route('posty.destroy', $post->id) }}">
  @csrf
  @method('DELETE')
    <div class="form-group">
      <label for="tytul">Tytuł</label>
      <input type="text" class="form-control" value="{{ $post->tytul }}" id="tytul" name="tytul" disabled="disabled">
    </div>
    <div>
      Data powstania postu: <b>{{ date('j F Y H:i:s',strtotime($post->created_at)) }}</b><br />
      Data modyfikacji postu: <b>{{ date('j F Y H:i:s',strtotime($post->updated_at)) }}</b>
    </div>
    <div class="form-group">
        <label for="autor">Autor</label>
        <input type="text" class="form-control" value="{{ $post->autor }} / {{ $post->user->name }}" id="autor" name="autor" disabled="disabled">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" value="{{ $post->email }} / {{ $post->user->email }}" id="email" name="email" disabled="disabled">
    </div>
    <div class="form-group">
      <label for="tresc">Treść postu</label>
      <textarea class="form-control" id="tresc" name="tresc" rows="4" disabled="disabled"> {{ $post->tresc }}</textarea>
    </div>
    <a href="{{ route('posty.index') }}"><button type="button" class="btn btn-primary">Powrót do listy</button></a>
    @auth
    <a href="{{ route('posty.edit', $post->id) }}"><button class="btn btn-success" type="button" >Edycja</button></a>
    <button class="btn btn-danger" type="submit" >Usuń</button>
    @endauth
  </form>
  {{-- dump($post) --}}
@endsection
