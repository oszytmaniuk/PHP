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
echo '<ul>';
foreach ($avatarArray as $key => $value) {
	echo '<li>' . $value . '<br>';
}
echo '</ul>';
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
echo '<h3>Exercise 4</h3>';
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

$numberList = array();
for ($i = 0; $i < 21; $i++) {
	$numberList[] = $i;
}
var_dump($numberList);

//same with a while loop;
echo '<br>';
echo '<hr>';

$list = array();
$a = 0;
while ($a <= 20) {
	$list[] = $a;
	$a++;
}
var_dump($list);

/*
	-Exercise 5 :
		Create a random numerical array.
		Find the smallest value.
		Find the greatest value.
	*/
echo '<br>';
echo '<hr>';
echo '<h3>Exercise 5</h3>';
$myArray = array(15, 20, 7, 40, 55, 6, 45);
/*$indexMin = array_search(min($myArray), $myArray);

$indexMax = array_search(max($myArray), $myArray);


sort($myArray);
//Find the smallest value.
echo 'Min value of the $myArray is ' . ($myArray[0]) . ' and has index = ' . $indexMin . '<br>';

//Find the greatest value.
$myArrayLength = count($myArray) - 1;
echo 'Max value of the $myArray is ' . ($myArray[$myArrayLength]) . ' and has index = ' . $indexMax . '<br>';
*/

$min = $myArray[0];
$max = $min;
$posMax = 0;
$posMin = 0;
foreach ($myArray as $key => $value) {
	if ($value < $number[$posMin]) {
		$posMin = $key;
	}
	if ($value > $myArray[$posMax]) {
		$posMax = $key;
	}
}
echo "Min = $myArray[$posMin], position = $posMin <br> Max = $myArray[$posMax], position = $posMax";
