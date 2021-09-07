<?php

class Pikachu extends Pokemon {

    public function __construct($name) {

        $this->name = $name;
        $this->energyType = 'lightning';
        $this->health = 60;
        $this->attacks = [['Name' => 'Electric Ring', 'Damage' => 50], ['Name' => 'Pika Punch', 'Damage' => 20]];
        $this->weakness = 'fire';
        $this->resistance = 'fighting';

    }

}