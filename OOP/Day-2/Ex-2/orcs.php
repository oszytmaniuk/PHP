<?php
require_once 'equipment.php';
require_once 'adventurer.php';

class Orcs extends Adventurer {
    
 //Exercise part form the day - 2:
        public function attack($opponent){
            //get-class() -> will retieve class name fo the 
            //opponent -> pls refer to the name of the Elfs class:
            if(get_class($opponent) ==='Elfs'){
               var_dump($opponent->_equipment);
               //retrieving weapons type from the array:
                if($opponent->_equipment[0]->_type != 'Shield'){
                    //deducting 50 points from the opponent health
                    $opponent->_health -=50;
                }
            }
        }
        public function usePower(){
                    $this->_defense +=20;
                    $this->_attack -=10;
                }
}
        
