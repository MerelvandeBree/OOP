<?php

class Pikachu extends Pokemon {

    public function __construct($name) {

        $this->name = $name;
        $this->energyType = 'lightning';
        $this->health = 60;
        $this->attacks = [['Name' => 'Electric Ring', 'Damage' => 50], ['Name' => 'Pika Punch', 'Damage' => 20]];
        $this->weakness = ['Name' => 'fire', 'Multiplier' => 1.5];
        $this->resistance = ['Name' => 'lightning', 'Value' => 10];

        parent::__construct($this->name, $this->energyType, $this->health, $this->attacks, $this->weakness, $this->resistance);

    }

}