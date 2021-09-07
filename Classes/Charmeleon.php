<?php

class Charmeleon extends Pokemon {

    public function __construct($name) {

        $this->name = $name;
        $this->energyType = 'fire';
        $this->health = 60;
        $this->attacks = [['Name' => 'Head Butt', 'Damage' => 10], ['Name' => 'Flare', 'Damage' => 30]];
        $this->weakness = 'water';
        $this->resistance = 'lightning';

    }

}