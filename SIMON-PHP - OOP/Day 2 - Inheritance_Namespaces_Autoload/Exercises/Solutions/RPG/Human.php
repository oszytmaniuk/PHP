<?php

class Human extends Adventurers {

    public function attack($opponent) {
        $bonus = 0;

        if(count($this->_equipments) == 0)
            $bonus = 3;

        $opponent->setHealthPoints($opponent->getHealthPoints() - ($this->_attackPoints+$bonus));
    }

    public function power() {
        if($this->_power) {
            $this->_healthPoints += 20;
            $this->_power = false;
        }
    }
}