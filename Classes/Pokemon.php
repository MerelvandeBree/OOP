<?php

class Pokemon {

    private $name;
    public $energyType;
    public $health;
    public $attacks;
    public $weakness;
    public $resistance;

    private static $count;

    public function __construct($name, $energyType, $health, $attacks, $weakness, $resistance) {

        $this->name = $name;
        $this->energyType = $energyType;
        $this->health = $health;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;

        self::$count++;
    }

    public function getName(){

        return $this->name;

    }

    public function attacks($target, $attackNumber) {

        $attack = $this->attacks[$attackNumber];
        $damage = $attack['Damage'];

        echo $this->name . ' attacks ' . $target->getName() . ' with ' . $attack['Name'] . '.<br>';

        $target->damage($target, $damage);

    }

    public function damage($target, $damage) {

        $resistanceValue = $this->resistance['Value'];
        $weaknessMultiplier = $this->weakness['Multiplier'];

        $resistanceType = $target->resistance['Name'];
        $weaknessType = $target->weakness['Name'];

        if ($this->weakness['Name'] == $weaknessType) {

            $damageTotal = $damage * $weaknessMultiplier;

        }

        if ($this->resistance['Name'] == $resistanceType) {

            $damageTotal = $damage - $resistanceValue;

        }

        $newHealth = $this->health - $damageTotal;

        if ($newHealth < 1) {

            self::$count--;

        }

        $this->health = $newHealth;

        echo $this->getName() . ' receives ' . $damageTotal . ' damage.<br>';
        echo $this->getName() . ' now has ' . $newHealth . ' hp.<br><br>';
    }

    public function getPopulation() {

        return Pokemon::$count;

    }

}