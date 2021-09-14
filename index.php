<?php

spl_autoload_register(function ($class_name) {
    include 'Classes/' . $class_name . '.php';
});

$pikachu = new Pikachu('Gert');
$charmeleon = new Charmeleon('Charmelameleon');
$squirtle = new Squirtle('Eekpad');

echo $pikachu->name . ' has ' . $pikachu->health . ' hp.<br>';
echo $charmeleon->name . ' has ' . $charmeleon->health . ' hp.<br>';
echo $squirtle->name . ' has ' . $squirtle->health . ' hp.<br><br>';

//Pikachu valt Charmeleon aan met een Electric Ring attack
$pikachu->attacks($charmeleon, 0);

//Charmeleon valt Pikachu aan met een Flare attack
$charmeleon->attacks($pikachu, 1);

//Charmeleon valt Eekpad aan met een Head Butt attack
$pikachu->attacks($squirtle, 1);

echo 'Het aantal levende pokemons is ' . Pokemon::getPopulation() . ' pokemons.';
