<?php

abstract class Adventurers
{
  // Original points
  protected $_attackPoints;
  protected $_defensePoints;
  protected $_healthPoints;
  protected $_speedPoints;
  protected $_warCry;
  protected $_power;
  protected $_equipments;

  // Constructor
  public function __construct()
  {
    $this->_healthPoints = 100;
    $this->_attackPoints = 10;
    $this->_defensePoints = 5;
    $this->_speedPoints = 1;
    $this->_warCry = 'Arhhhhgggg';
    $this->_power = true;
    $this->_equipments = array();
  }

  // Equipment methods
  abstract public function addEquipment($equipment)
  {
    if (count($this->_equipments) < 4) {
      $swords = 0;
      $shield = 0;

      foreach ($this->_equipments as $equip) {
        if ($equip->getType() === 'Sword')
          $swords++;

        if ($equip->getType() === 'Shield')
          $shield++;
      }

      if ($equipment->getType() === 'Sword' && $swords >= 2)
        return 'You already have 2 swords';

      if ($equipment->getType() === 'Shield' && $shield >= 1)
        return 'You already have a shield';

      $this->_equipments[] = $equipment;
      var_dump($equipment);
      return 'Equiped';
    } else
      return 'You already have 4 items';
  }

  public function removeEquipment($equipment)
  {
    foreach ($this->_equipments as $key => $equip) {
      if ($equipment === $equip) {
        unset($this->_equipments[$key]);
        return 'Item removed';
      }
    }

    return 'Item doesn\'t match';
  }

  public function displayEquipment()
  {
    foreach ($this->_equipments as $equip) {
      echo $equip;
    }
  }

  // Count number of Shields
  public function getShields() {
    $shield = 0;

    foreach ($this->_equipments as $equip) {
      if ($equip->getType() === 'Shield')
        $shield++;
    }

    return $shield;
  }

  // Count number of Swords
  public function getSwords() {
    $swords = 0;

    foreach ($this->_equipments as $equip) {
      if ($equip->getType() === 'Sword')
        $swords++;
    }

    return $swords;
  }

  public function getEquipment()
  {
    return $this->_equipments;
  }

  // Setters
  public function setHealthPoints($newHealthPoints) {   
    if($newHealthPoints<0)
      $this->_healthPoints = 0;
    else
      $this->_healthPoints = $newHealthPoints;
  } 

  public function getHealthPoints() {
    return $this->_healthPoints;
  }

  public function getStats()
  {
    $bonusAtk = $this->_attackPoints;
    $bonusDef = $this->_defensePoints;
    $bonusLife = $this->_healthPoints;

    foreach ($this->_equipments as $equip) {
      $bonusAtk += $equip->getBonusAtk();
      $bonusDef += $equip->getBonusDef();
      $bonusLife += $equip->getBonusHealth();
    }

    return 'Atk : ' . $bonusAtk . '<br>'
      . 'Def : ' . $bonusDef . '<br>'
      . 'Health : ' . $bonusLife . '<br>';
  }
}
