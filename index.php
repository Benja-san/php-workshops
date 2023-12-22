<?php

require_once("./functions.php");

$trainerName = "Ash";
$firstPokemon = "Pikachu";
$lowerCasedFirstPokemon = strtolower($firstPokemon);
$firstPokemonLevel = 5;
$isfirstPokemonKo = false;
$hometown = "Pallet Town";
$firstArena = "It's a bit soon to tell ya...";
$pokemons = ['Bulbizarre', 'Salamèche', 'Carapuce', $firstPokemon];
$pokemons[] = 'Mewtwo';
$pokemonLevels = [
    'bulbasaur' => 15,
    'charmender' => 7,
    'squirtle' => 3,
    $lowerCasedFirstPokemon => 45,
    'mewtwo' => 100,
];
$pokemonLevels['bulbasaur'] = 16;
unset($pokemonLevels['bulbasaur']);
$pokemonLevels['ivysaur'] = 16;

asort($pokemonLevels);

$pokemonsByType = [
    "grass" => ['bulbasaur', 'mystherbe', 'chetiflor', 'germignon'],
    "water" => ['squirtle', 'kaiminus', "staross"],
    "fire" => ['charmender'],
    "ground" => ['sabelette', 'taupiqueur']
];
$pokemonsByType['fire'][] = 'caninos';
$pokemonsByType['electrik'] = [$firstPokemon, "magneti", "voltorbe"];

// echo "$firstPokemon I choose you!";

// $firstPokemon = "Bulbasaur";

// echo "$firstPokemon I choose you!";

// $firstPokemonLevel++;
// echo "$firstPokemon is now level $firstPokemonLevel";

// echo $hometown;

$message = "My name is $trainerName and I am from $hometown. My first pokemon is $firstPokemon, where is the first arena ?";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop</title>
</head>
<body>
    <?php require_once("./header.php") ?>
    <main>
        <h1>How to basics</h1>
        <p><?php echo $message ?></p>
        <p>
            <?php if($lowerCasedFirstPokemon === "bulbasaur"): ?>
                Bon choix
            <?php elseif($lowerCasedFirstPokemon === "charmender"): ?>
                Tu n'as aucune personalité!
            <?php else : ?>
                Ah! c'est donc <?php echo $firstPokemon ?> ?
            <?php endif ?>
        </p>
        <ul>
            <?php foreach($pokemons as $key => $pokemon) : ?>
                <li id=<?php echo "pokemon_".$key+1 ?>><?php echo $pokemon ?></li>
            <?php endforeach ?>
            <?php var_dump($pokemonLevels) ?>
        </ul>
        <ul>
            <?php foreach($pokemonLevels as $key => $pokemonLevel) : ?>
                <?php if($pokemonLevel >= 10 && $pokemonLevel < 45) : ?>
                <li id=<?php echo "pokemon_".$key ?>><?php echo "$key level $pokemonLevel" ?></li>
                <?php endif ?>
            <?php endforeach ?>
            <?php var_dump($pokemonLevels) ?>
        </ul>
        <?php var_dump(array_filter($pokemonLevels, function($value){
            return $value >= 10 && $value < 45;
        })) ?>
        <?php print_r($pokemonsByType) ?>
        <ul>
            <?php foreach($pokemonsByType['grass'] as $grassPokemon) : ?>
                <li id=<?php echo "pokemon_".$grassPokemon ?>><?php echo $grassPokemon ?></li>
            <?php endforeach ?>
        </ul>
        <?php echo count($pokemonsByType['water']) ?>
        <?php include("./arena.php") ?>
        <section>
            <h2>BASICS 3</h2>
            <p>
                <?php echo sayHello() ?>
            </p>
            <h3>Fight mode</h3>
            <p>
                <?php echo fight("bulbasaur", "charmender", $pokemonsByType) ?>
            </p>
        </section>
    </main>
    <?php include_once("./footer.php") ?>
</body>
</html>