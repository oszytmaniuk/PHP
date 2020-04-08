<?php

require_once 'inheritance.php';

$dog = new Dog();
$dog->setName('Rantanplan');

$cat = new Cat();
$cat->setName('Garfield');

var_dump($dog);
var_dump($cat);