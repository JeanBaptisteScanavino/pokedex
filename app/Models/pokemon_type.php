<?php

namespace App\Models;

use App\Models\pokemon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pokemon_type extends Model
{
    use HasFactory;
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pokemon_type';

    public function pokemon()
    {
        return $this->belongsTo(pokemon::class);
    }
    public function type()
    {
        return $this->belongsTo(type::class);
    }
}
