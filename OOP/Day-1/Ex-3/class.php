<?php

require_once 'equipment.php';
require_once 'character.php';

$human = new Character('human');
$human->warcry();
// var_dump($human);



$sword = new Equipment("sword", "Death Sword", 10, 0, 0);
$sword2 = new Equipment("sword", "Life Sword", 20, 0, 0);
$sword3 = new Equipment("sword", "Legolas Sword", 1110, 1110, 1110);
$shield3 = new Equipment("Shield", "Dat Ass", 1110, 1110, 1110);
$shield4 = new Equipment("Shield2", "Dat Shield", 1110, 1110, 1110);
$jewel = new equipment("armor", "Grace Necklace", 0, 0, 5);
$jewel = new equipment("armor", "Grace Necklace2", 0, 0, 5);

// var_dump($human);
$human->equip($sword);
$human->equip($sword);
$human->displayEquipment();
$human->removeEquipment($sword);
$human->displayEquipment();
$human->removeEquipment($sword);
$human->displayEquipment();


// $human->equip($sword2);
// $human->equip($shield3);
// $human->equip($shield4);
// $human->equip($sword3);
// $human->equip($jewel);
// $human->equip($jewel);
// var_dump($sword->getData());
// var_dump($sword);
// $human->updateStats();
// var_dump($human);