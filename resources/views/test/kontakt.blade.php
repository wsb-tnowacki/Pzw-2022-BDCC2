@extends('layout')
@section('tytul')
Kontakt dane
@endsection

@section('naglowek')
    Kontakt dane
@endsection
@section('tresc1')
@isset($id,$tekst)
{{ "Id: $id, tekst: $tekst" }}
@endisset
@endsection
@section('tresc2')
Treść 2 dla kontakt test
@endsection
@section('tresc3')
Treść 3 dla kontakt test
@endsection
