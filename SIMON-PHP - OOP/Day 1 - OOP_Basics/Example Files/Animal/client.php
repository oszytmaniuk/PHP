<?php

require_once 'animal.php';

$girafe = new Animal('Girafe', 4);
$girafe->breed = 'Rhino';
echo $girafe->breed;
$girafe->makeSound();

// This is not going to work :
$girafe->legs = 4;
echo $girafe->legs;
// This is going to work :
$girafe->setLegs(4);
echo $girafe->getLegs();