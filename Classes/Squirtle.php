<?php


class Squirtle extends Pokemon
{

    public function __construct($name)
    {

        $this->name = $name;
        $this->energyType = 'water';
        $this->health = 60;
        $this->attacks = [['Name' => 'Aqua Tail', 'Damage' => 20], ['Name' => 'Shell Smash', 'Damage' => 30]];
        $this->weakness = ['Name' => 'lightning', 'Multiplier' => 2];
        $this->resistance = ['Name' => 'water', 'Value' => 10];

        parent::__construct($this->name, $this->energyType, $this->health, $this->attacks, $this->weakness, $this->resistance);
    }

}