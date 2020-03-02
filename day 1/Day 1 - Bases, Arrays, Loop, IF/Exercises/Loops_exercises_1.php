<?php

/*
	- Exercise 1 :
		
		Based on the character exercise, display all his caracteristics using a loop.

	*/

$avatar = array(
	'char' => array('strong', 'high', 'powerful')
);
var_dump($avatar['char']);

$avatarArray = array('strong', 'high', 'powerful');
foreach ($avatarArray as $key => $value) {
	echo $value . '<br>';
}
/*
	- Exercise 2 : 
		Michel went to the supermarket and bought some food.
		He used an array to save his spending.

	    $array = array("Salad"=>"1.03","Tomato"=>"2.3","Oignon"=>"1.85","Red cabbage"=>"0.85")
	    Write a script that will : 
	    1. Sort by value
	    2. Sort by key in descending order
	    3. Use a loop to calculate the total of his spendings.

	*/
echo '<br>';
echo '<hr>';
echo '<h3>Sort by value</h3>';
$array = array(
	"Salad" => "1.03",
	"Tomato" => "2.3",
	"Oignon" => "1.85",
	"Red cabbage" => "0.85"
);

asort($array);
foreach ($array as $key => $value) {
	echo $value . '<br>';
}

echo '<br>';
echo '<hr>';
echo '<h3>Sort by key in descending order</h3>';

krsort($array);
foreach ($array as $key => $value) {
	echo $value . '<br>';
}

echo '<br>';
echo '<hr>';
echo '<h3>Use a loop to calculate the total of his spendings.</h3>';
$i = 0;
foreach ($array as $key => $value) {
	$i += $value;
}
echo $i;


/*
	- Exercise 3 : 

		Using a loop, fill in a array with every number from 0 to 20.
		The element 0 will therefore contain 0, the element 1 will contain 2 etc.

		Do it by using a for AND a while loop
	*/
echo '<br>';
echo '<hr>';
echo '<h3>Exercise 3</h3>';
/*
	-Exercise 4 :
		Use a loop to create a array.
		This array will contain the multiplication table of 2.
		From 1 to 10.
	*/

$number = 2;
for ($i = 0; $i < 11; $i++) {
	echo $i * $number . '<br>';
}

/*
	-Exercise 5 :
		Create a random numerical array.
		Find the smallest value.
		Find the greatest value.
	*/

$myArray = array(10, 20, 30, 40, 50, 60, 70);
