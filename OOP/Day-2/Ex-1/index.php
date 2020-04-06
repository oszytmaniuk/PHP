<?php

require_once 'animal-class.php';
require_once 'object-cat.php';
require_once 'object-dog.php';
require_once 'human-class.php';
require_once 'robot-class.php';

$cat = new Cat (4, 'grey', 'm','Murzik');
//$cat -> meow();

$dog = new Dog (4, 'grey', 'f','Lajka');
//$dog -> bark();

var_dump($cat, $dog);

$human = new Human();
$robot = new Robot();
$human->work();
$human->talk();
$robot -> work();

//var_dump($human, $robot);