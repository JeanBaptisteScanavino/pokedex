<?php

namespace App\Http\Controllers;

use App\Models\type;
use App\Models\pokemon;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        
        $pokemons = pokemon::all();
        return view('home', [
            'pokemons' => $pokemons,
            'title'=>"Attrapez-les tous"
        ]);
    }
    public function show($name)
    {
        $pokemon = pokemon::where('nom',$name)->firstOrFail();
        $types = [];
        foreach ($pokemon->types as $type)
        {
             $types[] = type::find($type->type_id);
        }
        
        return view('pokemon', [
            'pokemon' => $pokemon,
            'types' => $types,
        ]);
    }
    public function types($type=null)
    {
        if($type){
            $typeToFind=type::where('name',$type)->firstOrFail();
            $pokemons = [];
            foreach ( $typeToFind->pokemon_type as $type_relation)
            {
                $pokemons[] = pokemon::where('numero',$type_relation->pokemon_numero)->first();
            }
            if (count($pokemons)===0){
                $title = "Il n'y a pas de Pokemon de type : $type";
            }  else {
                $title = "Pokemon de type : $type";
            }
            return view('home', [
                'pokemons' => $pokemons,
                'title'=> $title,
            ]);
        }
        $types = type::all();
        return view('types', [
            'types' => $types,
        ]);
    }
}
