@extends('layouts.app')
@section('content')
<h2 class="text-center">Liste des Pokemon</h2>
    <div class="d-flex  flex-wrap justify-content-center">
    @foreach ($types as $type)
    <a  id="btnType" class="btn d-flex justify-content-center flex-column align-items-center col-6 col-md-4 col-xxl-2 m-md-3" 
    href="{{ route('types',['type' => $type->name]) }}"
    style="background-color : #{{ $type->color }}">
        <h3>{{ $type->name }}</h3>    
    </a>     
    @endforeach
    </div>
@endsection