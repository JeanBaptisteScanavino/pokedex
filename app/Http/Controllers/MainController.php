<?php

namespace App\Http\Controllers;

use App\Models\pokemon;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        $pokemons = pokemon::all();
        return view('home', [
            'pokemons' => $pokemons,
        ]);
    }
    public function show($name)
    {
        $pokemon = pokemon::where('nom',$name)->firstOrFail() ;
    
        return view('pokemon', [
            'pokemon' => $pokemon,
        ]);
    }
}
