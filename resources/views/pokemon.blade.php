@extends('layouts.app')
@section('content')
<h2 class="text-center">{{ $pokemon->nom }}</h2>  
    <div  class="d-flex justify-content-around align-items-center  col-9 m-auto flex-wrap flex-md-nowrap">  
        <img class="col-10 col-md-4" src="{{ asset("img/$pokemon->numero.png")}}" alt="{{ $pokemon->nom }}">
        <div id="poke_info" class="col-10 col-md-6 p-5 rounded">
            @foreach ($types as $type)
                <a  href="{{ route('types',['type' => $type->name]) }}" class="btn" style="background-color : #{{ $type->color }}">{{ $type->name }}</a>
            @endforeach
            <div >
                <h3>PV {{ $pokemon->pv }}</h3>
                <div class="progress">
                    <div class="col-9 progress-bar" role="progressbar"  
                    style="width: {{( $pokemon->pv *100)/255 }}%"
                    aria-valuenow="{{ $pokemon->pv }}"
                    aria-valuemin="0" aria-valuemax="255">
                    </div>
                </div>
            </div>
            <div>
                <h3>Attaque {{ $pokemon->attaque }}</h3>
                <div class="progress">
                    <div class="col-9 progress-bar" role="progressbar" 
                    style="width:{{( $pokemon->attaque *100)/255 }}%"
                    aria-valuenow="{{ $pokemon->attaque }}" aria-valuemin="0" aria-valuemax="255">
                    </div>
                </div>
            </div>
            <div>
                <h3>Défense {{ $pokemon->defense }}</h3>
                <div class="progress">
                    <div class="col-9 progress-bar" role="progressbar" 
                    style="width:{{( $pokemon->defense *100)/255 }}%"
                    aria-valuenow="{{ $pokemon->defense }}" aria-valuemin="0" aria-valuemax="255">
                    </div>
                </div>
            </div>
            <div>
                <h3>Attaque spéciale {{ $pokemon->attaque_spe }}</h3>
                <div class="progress">
                    <div class="col-9 progress-bar" role="progressbar" 
                    style="width:{{( $pokemon->attaque_spe *100)/255 }}%"
                    aria-valuenow="{{ $pokemon->attaque_spe }}" aria-valuemin="0" aria-valuemax="255">
                    </div>
                </div>
            </div>
            <div>
                <h3>Défense spéciale {{ $pokemon->defense_spe }}</h3>
                <div class="progress">
                    <div class="col-9 progress-bar" role="progressbar" 
                    style="width:{{( $pokemon->defense_spe *100)/255 }}%"
                    aria-valuenow="{{ $pokemon->defense_spe }}" aria-valuemin="0" aria-valuemax="255">
                    </div>
                </div>
            </div>
            <div>
                <h3>Vitesse {{ $pokemon->vitesse }}</h3>
                <div class="progress">
                    <div class="col-9 progress-bar" role="progressbar" 
                    style="width:{{( $pokemon->vitesse *100)/255 }}%"
                    aria-valuenow="{{ $pokemon->vitesse }}" aria-valuemin="0" aria-valuemax="255">
                    </div>
                </div>
            </div>
        </div>
    </div>       
@endsection