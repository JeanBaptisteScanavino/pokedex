<?php

namespace App\Models;

use App\Models\Pokemon_type;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    protected $table = 'pokemons';
    public function types()
    {
        return $this->hasMany(Pokemon_type::class,'pokemon_number','number');
    }
}
