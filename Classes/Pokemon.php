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

    public function getName(){

        return $this->name;

    }

    public function attacks($target, $attackNumber) {

        $attack = $this->attacks[$attackNumber];
        $damage = $attack['Damage'];

        echo $this->name . ' attacks ' . $target->getName() . ' with ' . $attack['Name'] . '.<br>';

        $target->damage($damage);

    }

    public function damage($damage) {

        $newHealth = $this->health - $damage;
        $resistance = $this->resistance['Value'];
        $weakness = $this->weakness['Multiplier'];

        if ($this->weakness['Name'] == 'fire') {

            $damageTotal = $attack * $weakness;

        }

        if ($this->resistance['Name'] == 'lightning') {

            $damageTotal = $attack - $resistance;

        }

        echo $this->getName() . ' receives ' . -$damageTotal . ' damage.<br>';
        echo $this->getName() . ' now has ' . $newHealth . ' hp.<br><br>';

    }

    public function getPopulation() {

    }

}