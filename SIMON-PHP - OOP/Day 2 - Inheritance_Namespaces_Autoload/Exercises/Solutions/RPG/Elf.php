<?php

class Elf extends Adventurers {

    public function attack($opponent) {
        $swords = $this->getSwords();
        $bonus = 2*$swords;

        $opponent->setHealthPoints($opponent->getHealthPoints() - ($this->_attackPoints + $bonus));
    }

    public function power() {
        if($this->_power) {
            $this->_speedPoints +=3;
            $this->_power = false;
        }
    }
}