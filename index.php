<?php

$trainerName = "Ash";
$firstPokemon = "Pikachu";
$firstPokemonLevel = 5;
$isfirstPokemonKo = false;
$hometown = "Pallet Town";
$firstArena = "It's a bit soon to tell ya...";

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
        <?php include("./arena.php") ?>
    </main>
    <?php include_once("./footer.php") ?>
</body>
</html>