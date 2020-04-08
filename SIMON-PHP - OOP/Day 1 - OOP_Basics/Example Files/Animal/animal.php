<?php

// Blueprint of an object : a class
class Animal {
    // Declare all the Properties
    public $_breed;
    private $_legs;

     // Construct
     public function __construct($breed, $legs) {
        $this->_breed = $breed;
        $this->_legs = $legs;
     }

    // Methods
    public function makeSound() {
        echo 'Depends on the animal, right ?';
    }

    // Setters & Getters
    public function setLegs($numberOfLegs) {
        $this->_legs = $numberOfLegs;
    }

    public function getLegs() {
        return $this->_legs;
    }


}




