@extends('layouts.app')
@section('content')
    <div>
        
            
        <img src="{{ asset("img/$pokemon->numero.png")}}">
        <h2>{{ $pokemon->nom }}</h2>
        <h3>PV {{ $pokemon->pv }}</h3>
        <h3>Attaque {{ $pokemon->attaque }}</h3>
        <h3>Défense {{ $pokemon->defense }}</h3>
        <h3>Attaque spéciale {{ $pokemon->attaque_spe }}</h3>
        <h3>Défense spéciale {{ $pokemon->defense_spe }}</h3>
        <h3>Vitesse {{ $pokemon->vitesse }}</h3>
     
    </div>       
    
@endsection