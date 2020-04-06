<?php
require_once 'equipment.php';

class Character
{
    private $_name;
    // Default points
    private $_health = 100;
    private $_attack = 10;
    private $_defense = 5;
    // Actual points
    private $_bHealth = 100;
    private $_bAttack = 10;
    private $_bDefense = 5;
    private $_race;
    private $_warcry;
    public $_equipment = [];


    //constructor:
    public function __construct($race)
    {
        $listRace = ['human', 'orc', 'elf'];
        if (in_array($race, $listRace)) {
            $this->_race = $race;
        } else {
            echo 'race doesnt exist (human, orc or elf) <br>';
        }

        $this->defineWarcry();
    }


    public function defineWarcry()
    {
        if ($this->_race == 'orc') {
            $this->_warcry = 'wwouogrouroulou mlll !!';
        } else {
            $this->_warcry = 'Attaaaaaack!';
        }
    }

    public function warcry()
    {
        echo $this->_warcry;
    }

    public function displayEquipment()
    {
        var_dump($this->_equipment);
        echo '<h2>Your equipment: </h2><hr>';
        for ($i = 0; $i < count($this->_equipment); $i++) {
            echo 'Name: ' . $this->_equipment[$i]->_name . '<br>';
            echo 'Attack: ' . $this->_equipment[$i]->_attackBonus . '<br>';
            echo 'Armor: ' . $this->_equipment[$i]->_armorBonus . '<br>';
            echo 'Health: ' . $this->_equipment[$i]->_healthBonus . '<br><hr>';
        }
    }


    public function countSword()
    {
        $swordCount = 0;
        for ($i = 0; $i < count($this->_equipment); $i++) {
            if ($this->_equipment[$i]->_type == 'sword') {
                $swordCount++;
            }
        }
        // var_dump($swordCount);
        return $swordCount;
    }

    public function countArmor()
    {
        $armorCount = 0;
        for ($i = 0; $i < count($this->_equipment); $i++) {
            if ($this->_equipment[$i]->_type == 'armor') {
                $armorCount++;
            }
        }
        // var_dump($armorCount);
        return $armorCount;
    }


    public function removeEquipment($selectedItem)
    {
        for ($i = 0; $i < count($this->_equipment); $i++) {
            if ($selectedItem->_name == $this->_equipment[$i]->_name) {
                var_dump($this->_equipment);
                unset($this->_equipment[$i]);
                $this->_equipment = array_values($this->_equipment);
            }
        }
    }
    public function equip($equipment)
    {
        $tempType = '';
        // $equipType = $equipment ->getData()['type'];
        $swordCount = $this->countSword();
        $armorCount = $this->countArmor();
        // var_dump($equipment->_type);
        var_dump(sizeof($this->_equipment));
        if (sizeof($this->_equipment) < 4) {
            if ($equipment->_type == 'sword') {
                if ($swordCount < 2) {
                    array_push($this->_equipment, $equipment);
                    $this->updateStats($equipment);
                    echo 'Sword equiped <br>';
                } else {
                    echo 'Cant equip more than 2 swords  <br>';
                }
            } elseif ($equipment->_type == 'armor') {
                if ($armorCount < 1) {
                    array_push($this->_equipment, $equipment);
                    $this->updateStats($equipment);

                    echo 'Armor equiped <br>';
                } else {
                    echo 'Cant equip more than 1 amor <br>';
                }
            } else {
                array_push($this->_equipment, $equipment);
                $this->updateStats($equipment);
                echo 'Item equiped <br>';
            }
        } else {
            echo 'Cant equip more than 4 items <br>';
        }
        // var_dump($this->_equipment);
    }

    function updateStats($item)
    {
        $this->_bHealth += $item->_healthBonus;
        $this->_bAttack += $item->_attackBonus;
        $this->_bDefense += $item->_armorBonus;
    }
}
