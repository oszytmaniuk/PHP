<?php


class Equipment
{


    public $_type;
    public $_name;
    public $_attackBonus;
    public $_armorBonus;
    public $_healthBonus;



    //constructor:
    public function __construct($type, $name, $attackBonus, $armorBonus, $healthBonus)
    {
        $this->_type = $type;
        $this->_name = $name;
        $this->_attackBonus = $attackBonus;
        $this->_armorBonus = $armorBonus;
        $this->_healthBonus = $healthBonus;
    }

}