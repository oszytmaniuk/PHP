<?php
include_once 'CoffeeCup.php';

//$myCoffee = new CoffeeCup(20, 'Arabica', 78);
// $myCoffee->setQuantity(20);
// $myCoffee->setBrand('Malongo');
// $myCoffee->setTemperature(65);
// $myCoffee->sip(3);
// var_dump($myCoffee);

// $myCoffee->refill();
// var_dump($myCoffee);


//part3:

$anotherCoffee = new CoffeeCup(30, 'Coffee', 81, 500);
//$anotherCoffee->setVolume(450);
//this below is not woring because the property is PRIVATE!
//echo $anotherCoffee->$volume;
//$anotherCoffee->refill();
//var_dump($anotherCoffee);

$newCoffee = new CoffeeCup('Mokka',80, 480);
//echo $newCoffee->reHeat(78);
//echo $newCoffee->coolDown(85);
//echo $newCoffee->sip(479);
//$newCoffee->sip(5);
// var_dump($newCoffee);

$sixCoffee = new CoffeeCup("Malongo", 65, 20);
while ($sixCoffee->getQuantity() > 0){
    $quantityToSip = rand(1,6);
    echo $sixCoffee->sip($quantityToSip).'<br>';
    echo $sixCoffee->coolDown(2).'<br>';
}
var_dump($sixCoffee);

