<?php

class Pokemon {

    public $name;
    public $energyType;
    public $health;
    public $attacks;
    public $weakness;
    public $resistance;
    public $target;


    public function __construct($name, $energyType, $health, $attacks, $weakness, $resistance) {

        $this->name = $name;
        $this->energyType = $energyType;
        $this->health = $health;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;

    }

}