@extends('layouts.app')
@section('content')
<h2 class="text-center">{{ $pokemon->name }}</h2>  
    <div  class="d-flex justify-content-around align-items-center  col-9 m-auto flex-wrap flex-md-nowrap">  
        <img class="col-10 col-md-4" src="{{ asset("img/$pokemon->number.png")}}" alt="{{ $pokemon->name }}">
        <div id="poke_info" class="col-10 col-md-6 p-5 rounded">
            @foreach ($types as $type)
                <a  href="{{ route('types',['type' => $type->name]) }}" class="btn" style="background-color : #{{ $type->color }}">{{ $type->name }}</a>
            @endforeach
            <div >
                <h3>PV {{ $pokemon->life }}</h3>
                <div class="progress">
                    <div class="col-9 progress-bar" role="progressbar"  
                    style="width: {{( $pokemon->life *100)/255 }}%"
                    aria-valuenow="{{ $pokemon->life }}"
                    aria-valuemin="0" aria-valuemax="255">
                    </div>
                </div>
            </div>
            <div>
                <h3>Attaque {{ $pokemon->attack }}</h3>
                <div class="progress">
                    <div class="col-9 progress-bar" role="progressbar" 
                    style="width:{{( $pokemon->attack *100)/255 }}%"
                    aria-valuenow="{{ $pokemon->attack }}" aria-valuemin="0" aria-valuemax="255">
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
                <h3>Attaque spéciale {{ $pokemon->attack_pow }}</h3>
                <div class="progress">
                    <div class="col-9 progress-bar" role="progressbar" 
                    style="width:{{( $pokemon->attack_pow *100)/255 }}%"
                    aria-valuenow="{{ $pokemon->attack_pow }}" aria-valuemin="0" aria-valuemax="255">
                    </div>
                </div>
            </div>
            <div>
                <h3>Défense spéciale {{ $pokemon->defense_pow }}</h3>
                <div class="progress">
                    <div class="col-9 progress-bar" role="progressbar" 
                    style="width:{{( $pokemon->defense_pow *100)/255 }}%"
                    aria-valuenow="{{ $pokemon->defense_pow }}" aria-valuemin="0" aria-valuemax="255">
                    </div>
                </div>
            </div>
            <div>
                <h3>Vitesse {{ $pokemon->speed }}</h3>
                <div class="progress">
                    <div class="col-9 progress-bar" role="progressbar" 
                    style="width:{{( $pokemon->speed *100)/255 }}%"
                    aria-valuenow="{{ $pokemon->speed }}" aria-valuemin="0" aria-valuemax="255">
                    </div>
                </div>
            </div>
        </div>
    </div>       
@endsection