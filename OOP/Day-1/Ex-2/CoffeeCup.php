<?php

class CoffeeCup
{
    private $quantity;
    private $brand;
    private $temperature;
    private $volume;
    private $degree;

    //methods:
    //1. remain coffee after drinking:
    public function sip($drink)
    {
      $remain = $this->quantity-$drink;
      if($remain > 0){
        echo 'Remain '.$remain.'cl of coffee';
        $this->quantity = $remain;
      }
      else {
      echo 'Coffee is finished';
      $this->quantity = 0;
      }
    }

    //2. coffee refill:
    public function refill()
    {
      //TODO!!! IF remain < volume ...
        $this->quantity === $this->volume;
        echo 'Mug full again';
      }


    //constructor:
    public function __construct($brand, $temperature, $volume)
  {
    $this->quantity = $volume;
    $this->brand = $brand;
    $this->temperature = $temperature;
    $this->volume = $volume;
  }

  //Setters:
  // public function setQuantity($quantity)
  // {
  //   $this->quantity = $quantity;
  // }

  // public function setBrand($brand)
  // {
  //   $this->brand = $brand;
  // }

  // public function setTemperature($degree)
  // {
  //    return $this->temperature = $degree;
  // }

public function reHeat($degree)
{
  $this->degree = $degree; 
  //-> no chance to assign a new property
  //when it's not defined in Constractor?
  if($degree < $this->temperature)
    $reheat = $this->temperature - $degree;
    return 'new coffee temp is: '.$degree.' degree. And the coffee needs 
    to be reheated for: '.$reheat;
}

public function coolDown($degree){
  if($degree > $this->temperature)
    $cooldown = -($this->temperature) + $degree;
    return 'new coffee temp is: '.$degree.' degree. And the coffee needs 
    to be cooleddown for: '.$cooldown;
}
  //volume:
  public function setVolume($volume)
  {
    $this->volume = $volume;
  }

  //Getters:
  public function getQuantity($quantity)
  {
    return $this->$quantity;
  }

  public function getBrand($brand)
  {
    return $this->$brand;
  }
  public function getTemperature($temperature)
  {
    return $this->$temperature;
  }
  //volume:
  public function getVolume($volume)
  {
    return $this->$volume;
  }

}
