<?php

namespace App\Models;

use App\Models\Pokemon_type;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function pokemon_type()
    {
        return $this->hasMany(Pokemon_type::class);
    }
}
