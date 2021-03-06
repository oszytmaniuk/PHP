<?php
echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 1 </p>';

$integerArray = array(1, 2, 5, 9, 10, 40, 50);
function isOrder($array)
{
	$array_length = count($array);
	for ($i = 0; $i < $array_length - 1; $i++) {
		if ($array[$i] > $array[$i + 1]) {
			return false;
		}
	}
	return true;
}
//this will check is the isOrder() is TRUE or FALSE. because we were using a RETURN wich gives us a BOOLEAN.
//this also can be used in diff functions. And sometimes its better to use this approach as apposed to ECHOing.
if (isOrder($integerArray))
	echo 'the array is ASC';
else
	echo 'the array is NOT ASC';

/*
-- Exercise 1 : 
	Write a function 'isOrder' that :
		- Take one array of integer as argument
		- Checks if the elements of the arrays are ordered in ascending order.

*/
echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 2 </p>';

$unorderedArray = array(3, 8, 1, 2, 7, 10, 9, 4, 6, 5);
function orderArray($array)
{
	for ($i = 0; $i < count($array); $i++) {
		echo $array[$i] . '<br>';
		

	}
}
orderArray($unorderedArray);
/*
-- Exercise 2 :

	Write a function 'orderArray' that :
		- Take one array of integer as argument
		- Return an array which was ordered

-- Exercise 3 :

	Write a function that : 
		- Take one float $x as argument
		- Get the integer part of a positive number ($x)
		- Return this integer part

	Example :
		integerPart(5.26) // return 5
		integerPart(10.76) // return 10

-- Exercise 4 :

	We have an array of integers, positive, between 1 and $nbElements (nbElements is the number of elements, you can use this variable).

	Write a function call 'FizzBuzz'.
	For each number 'n' of the list, we want the following operations:
		. if the number is divisible by 3 : display 'Fizz'
		. if the number is divisible by 5 : display 'Buzz'
		. if the number is divisible by 3 AND by 5 : display 'FizzBuzz'
		. else : display the number 'n'
	*/
