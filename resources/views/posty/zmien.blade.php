@extends('start.layout')
@section('tytul')Posty
@endsection
@section('naglowek')
Zmian postu
@endsection
@section('tresc')
<form method="POST" action="{{ route('posty.update', $post->id) }}">
    @csrf
    @method('PUT')
    @if ($errors->any())
    <div class="alert alert-danger">
        Zmiana treści postu
        {{-- dump($errors) --}}
    </div>
    @endif
    <div class="form-group">
      <label for="tytul">Tytuł</label>
      <input type="text" class="form-control" value="@if(old('tytul') !== null){{ old('tytul') }}@else{{ $post->tytul }}@endif" id="tytul" name="tytul" placeholder="Podaj tytuł postu">
    </div>
    @if ($errors->get('tytul'))
    <div class="alert alert-danger">

            @foreach ($errors->get('tytul') as $error)
                <p>{{ $error }}</p>
            @endforeach
    </div>
    @endif
    <div class="form-group">
        <label for="autor">Autor</label>
        <input type="text" class="form-control" value="@if(old('autor') !== null){{ old('autor') }}@else{{$post->autor }}@endif" id="autor" name="autor" placeholder="Podaj autora postu">
      </div>
      @if ($errors->get('autor'))
    <div class="alert alert-danger">

            @foreach ($errors->get('autor') as $error)
                <p>{{ $error }}</p>
            @endforeach
    </div>
    @endif
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" value="@if(old('email') !== null){{ old('email') }}@else{{ $post->email }}@endif" id="email" name="email" placeholder="podaj email">
    </div>
    @if ($errors->get('email'))
    <div class="alert alert-danger">

            @foreach ($errors->get('email') as $error)
                <p>{{ $error }}</p>
            @endforeach
    </div>
    @endif
    <div class="form-group">
      <label for="tresc">Treść postu</label>
      <textarea class="form-control" id="tresc" name="tresc" rows="4">@if(old('tresc') !== null){{ old('tresc') }}@else{{$post->tresc}}@endif</textarea>
    </div>
    @if ($errors->get('tresc'))
    <div class="alert alert-danger">

            @foreach ($errors->get('tresc') as $error)
                <p>{{ $error }}</p>
            @endforeach
    </div>
    @endif
    <button type="submit" class="btn btn-success">Zmień post</button>
    
  </form>
@endsection
