@extends('layouts.app')
@section('content')

    <h2 class="text-center">{{ $title }}</h2>
    <div class="d-flex  flex-wrap m-auto col-12 justify-content-around ">
    @foreach ($pokemons as $pokemon)
    <a id='card' class="btn  d-flex justify-content-between flex-column align-items-center col-10 col-sm-5 col-lg-3 col-xxl-2 m-3" 
    href="{{ route('pokemon_detail',['name' => $pokemon->name]) }}">
        <img class="img-thumbnail mt-4 col-8" src="{{ asset("img/$pokemon->number.png")}}" alt="{{ $pokemon->name }}">
        <h3 id="name" class="fs-6 p-3">#{{ $pokemon->number }} {{ $pokemon->name }}</h3>    
    </a>     
    @endforeach
    </div>

@endsection