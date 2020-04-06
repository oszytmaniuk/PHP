<?php
require_once 'equipment.php';
require_once 'adventurer.php';

class Orcs extends Adventurer {
    
 //Exercise part form the day - 2:
        public function attack($opponent){
            if($opponent ==='elf'){
                echo $this->_equipment[0]->_type;
                if($this->_equipment[0]->_type != 'Shield'){
                    echo 'blablabla';
                }
            }
        }

        public function usePower($power){
            $this->_power = $power;
            if ($this->_race == 'orc'){
                if($power = 'invisible'){
                    $this->_defense +=20;
                    $this->_attack -=10;
                }
            }
        }
}