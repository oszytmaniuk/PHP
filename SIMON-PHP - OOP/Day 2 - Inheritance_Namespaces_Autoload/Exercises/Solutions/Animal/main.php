<?php 
spl_autoload_register();
// require_once 'Cat.php';
// require_once 'Dog.php';
// require_once 'Human.php';
// require_once 'Robot.php';
// require_once 'interface.php';

$garfield = new Cat('Garfield', 'Male', 'Orange');
$murzik = new Cat('Murzik', 'F', 'Black');
$kotek = new Cat('Mlotek', 'Male', 'White');
//var_dump($garfield);
//echo $garfield->talk();

//echo '<br><br>';

$snoopy = new Dog('Snoopy', 'Male', 'White/Black');
$poopy = new Dog('Poopy', 'F', 'White');
$tuuky= new Dog('Tuuki', 'M', 'Grey');
$liliana = new Human('Liliana', 'Woman', 'Brown');
$neandertal = new Human('Homo', 'M', 'Black');
$sapiens = new Human('Sapiens', 'F', 'White');
//var_dump($snoopy);
//echo $snoopy->talk();
$animalHumanArray = array($garfield,$murzik,$kotek,$snoopy,$poopy, $tuuky, $liliana, $neandertal, $sapiens  );
//rAnimaHumanlArray = array_rand($animalHumanArray, 4);
//echo '<hr>';

$zoltan = new Robot('4177', 'Silver');
$robot = new Robot('rrrrr', 'Metal');
$humanRobotArray = array($zoltan, $robot, $liliana, $neandertal, $sapiens);


//$rHumanRobotArray = array_rand($humanArray, 3);
//var_dump($liliana);
// echo $liliana->talk();
// echo $liliana->work();
//echo '<br><br>';
// echo $zoltan->work();
//$animal1 = new Animal('shepard', 4);

/*
for ($i=0; $i < 10; $i++) { 
    $creature = array_rand($animalHumanArray,1);
    echo  $animalHumanArray[$creature]->talk().'<br>';
}
*/

for ($i=0; $i < 10; $i++) { 
    $creature1 = array_rand($humanRobotArray,1);
    echo $humanRobotArray[$creature1]->work(). '<br>';
}

 ?>