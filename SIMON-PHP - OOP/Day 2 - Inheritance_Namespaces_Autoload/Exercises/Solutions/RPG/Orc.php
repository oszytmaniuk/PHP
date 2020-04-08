<?php

class Orc extends Adventurers {

    public function __construct() {
        parent::__construct();
        $this->_warCry = 'wwouogrouroulou mlll !!';
    }

    public function attack($opponent) {
        if(get_class($opponent) == 'Elf' && ($opponent->getShields()== 0)) {
            // Remove 50 life points
            $opponent->setHealthPoints($opponent->getHealthPoints() - 50);
        } else {
            $opponent->setHealthPoints($opponent->getHealthPoints() - $this->_attackPoints);
        }
    }

    public function power() {
        if($this->_power) {
            $this->_defensePoints += 20;
            $this->_attackPoints -= 10;
            $this->_power = false;
        }
    }


}