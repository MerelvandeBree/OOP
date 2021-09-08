<?php

require 'init.php';

$pikachu = new Pikachu('Gert');
$charmeleon = new Charmeleon('Charmelameleon');

echo $pikachu->name . ' has ' . $pikachu->health . ' hp<br>';
echo $charmeleon->name . ' has ' . $charmeleon->health . ' hp<br><br>';

//Pikachu valt Charmeleon aan met een Electric Ring attack
$pikachu->attacks($charmeleon, 0);

//Charmeleon valt Pikachu aan met een Flare attack
$charmeleon->attacks($pikachu, 1);

echo 'Het aantal levende pokemons is ' . Pokemon::getPopulation() . '.';
