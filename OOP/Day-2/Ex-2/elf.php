<?php

require_once 'orcs.php';

class Elfs extends Adventurer {
    
    public function attack($race){
        if ($race === 'orcs'){
            $this->_health -=50;
        }
    }
}