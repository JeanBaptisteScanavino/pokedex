<?php

namespace App\Models;

use App\Models\Type;
use App\Models\Pokemon;
use Illuminate\Database\Eloquent\Model;

class Pokemon_type extends Model
{
    public function pokemon()
    {
        return $this->belongsTo(Pokemon::class);
    }
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
