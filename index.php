<?php

require 'Classes/Pokemon.php';
require 'Classes/Pikachu.php';
require 'Classes/Charmeleon.php';

//$pokemon = new Pokemon();

$pikachu = new Pikachu('Pikachu');
$charmeleon = new Charmeleon('Charmeleon');

echo $pikachu->name;
echo '<br>' . $pikachu->health . ' hp';

echo '<br><br>' . $charmeleon->name;
echo '<br>' . $charmeleon->health . ' hp';
