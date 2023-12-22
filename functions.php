<?php

function sayHello(string $name = "Bulbi") : string
{
    return "Hello $name";
}

function getPokemonType($pokemon, $pokemonTypes) : string
{
   $pokemonType = "normal";
   foreach($pokemonTypes as $type => $pokemons){
    if(in_array($pokemon, $pokemons)){
        $pokemonType = $type;
    }
   }
   return $pokemonType;
}

function fight(string $pokemon1, string $pokemon2, array $pokemonTypes) : string
{

    $pokemonType1 = getPokemonType($pokemon1, $pokemonTypes);
    $pokemonType2 = getPokemonType($pokemon2, $pokemonTypes);

   return match($pokemonType1) {

    "fire" => match($pokemonType2) {
        "fire" => "Draw",
        "grass" => "$pokemon1 wins and $pokemon2 loose",
        "water" => "$pokemon2 wins",
        default => "let's the fight begin"
    },

    "water" => match($pokemonType2) {
        "fire" => "$pokemon1 wins",
        "grass" => "$pokemon2 wins",
        "water" => "Draw",
        default => "let's the fight begin"
    },

    "grass" => match($pokemonType2) {
        "fire" => "$pokemon2 wins",
        "grass" => "Draw",
        "water" => "$pokemon1 wins",
        default => "let's the fight begin"
    },

    default => "let's the fight begin"

   };
}