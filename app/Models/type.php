<?php

namespace App\Models;

use App\Models\pokemon_type;
use Illuminate\Database\Eloquent\Model;

class type extends Model
{
    protected $table = 'type';

    public function pokemon_type()
    {
        return $this->hasMany(pokemon_type::class);
    }
}
