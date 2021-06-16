<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PokemonTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('pokemon_types',function (Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('pokemon_number');
            $table->unsignedInteger('type_id');
            $table->foreign('pokemon_number')->references('number')->on('pokemons');
            $table->foreign('type_id')->references('id')->on('types');
        });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
