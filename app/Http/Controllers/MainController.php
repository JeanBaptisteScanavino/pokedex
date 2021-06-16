<?php

namespace App\Http\Controllers;


use App\Models\Type;
use App\Models\Pokemon;

class MainController extends Controller
{
    public function home()
    {
        
        $pokemons = Pokemon::all();
        return view('home', [
            'pokemons' => $pokemons,
            'title'=>"Attrapez-les tous"
        ]);
    }
    public function show($name)
    {
        $pokemon = Pokemon::where('name',$name)->firstOrFail();
        $types = [];
        foreach ($pokemon->types as $type)
        {
             $types[] = Type::find($type->type_id);
        }
        
        return view('pokemon', [
            'pokemon' => $pokemon,
            'types' => $types,
        ]);
    }
    public function types($type=null)
    {
        if($type){
            $typeToFind=Type::where('name',$type)->firstOrFail();
            $pokemons = [];
            foreach ( $typeToFind->pokemon_type as $type_relation)
            {
                $pokemons[] = Pokemon::where('number',$type_relation->pokemon_number)->first();
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
        $types = Type::all();
        return view('types', [
            'types' => $types,
        ]);
    }
}
