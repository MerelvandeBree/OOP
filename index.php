<?php

require 'init.php';

$pikachu = new Pikachu('Gert');
$charmeleon = new Charmeleon('Charmelameleon');

echo $pikachu->name . ' has ' . $pikachu->health . ' hp<br>';
echo $charmeleon->name . ' has ' . $charmeleon->health . ' hp<br><br>';


$pikachu->attacks($charmeleon, 0);
//$charmeleon->damage($charmeleon, 0);

$charmeleon->attacks($pikachu, 1);


//Pikachu valt Charmeleon aan met een Electric Ring attack
//Charmeleon valt Pikachu aan met een Flare attack
//Print voor en na de aanval de health uit van de pokemon die wordt aangevallen.
