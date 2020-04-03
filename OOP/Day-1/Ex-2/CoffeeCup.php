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
        echo 'You sip '.$drink. 'cl, left '.$remain.' cl of coffee';
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

  

public function reHeat($degree)
{
  $this->degree = $degree; 
  $reheat = $this->temperature - $degree;
  return 'new coffee temp is: '.$degree.' degree. And the coffee needs 
  to be reheated for: '.$reheat;
}

public function coolDown($degree){
  $this->temperature = $this->temperature - $degree;
  return 'new coffee temp is: '.$this->temperature;
}
  //volume:
  public function setVolume($volume)
  {
    $this->volume = $volume;
  }

  //Getters:
  public function getQuantity()
  {
    return $this->quantity;
  }

  public function getBrand()
  {
    return $this->brand;
  }
  public function getTemperature()
  {
    return $this->temperature;
  }
  //volume:
  public function getVolume()
  {
    return $this->volume;
  }

}
