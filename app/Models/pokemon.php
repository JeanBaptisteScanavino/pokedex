<?php

namespace App\Models;

use App\Models\pokemon_type;
use Illuminate\Database\Eloquent\Model;

class pokemon extends Model
{

    public function types()
    {
        return $this->hasMany(pokemon_type::class,'pokemon_numero','numero');
    }
}
