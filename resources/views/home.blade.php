@extends('layouts.app')
@section('content')
    <div class="d-flex  flex-wrap">
    @foreach ($pokemons as $pokemon)
    <a  class="btn btn-outline-warning d-flex justify-content-center flex-column align-items-center col-3" 
    href="{{ route('pokemon_detail',['name' => $pokemon->nom]) }}">
        <img class="img-thumbnail col-8" src="{{ asset("img/$pokemon->numero.png")}}">
        <h2>{{ $pokemon->nom }}</h2>    
    </a>     
    @endforeach
    </div>
@endsection