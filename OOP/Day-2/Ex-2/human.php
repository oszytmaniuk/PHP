<?php
require_once 'equipment.php';
require_once 'adventurer.php';

class Humans extends Adventurer
{
    //Exercise part form the day - 2:
    public function attack($opponent)
    {
        //retrieving weapons type from the array:
        if ($this->_equipment[0]->_type === null) {
            //adding +3 to its bonusAttack:
            $this->_bAttack += 3;
        }
    }

    public function power(){
        if($this->_power){
        $this->_health +=20;
        $this->_power = false;
        }
    }
}
