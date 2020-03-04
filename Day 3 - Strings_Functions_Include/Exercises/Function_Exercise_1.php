<?php

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 1 </p>';

/*
-- Exercise 1 :
	
	1.1
	Write a PHP script which multiply two numbers
	Example : 2*4 = 8

	1.2
	Write a function which :
	    - Take 2 numbers in parameters
	    - Returns the result of the multiplication of the two numbers
	    
	1.3
	Create a form that:
	- Allows to enter 2 numbers
	- Get the result of the multiplication of these 2 numbers
		(use the function created in 1.2)
	- Warning, it is necessary to manage the case where the user does not enter the two numbers.
*/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 2 </p>';

/*
- Exercise 2

Write a function that:
    - Takes into parameter two numbers.
    - Check which is the largest number.

*/
function largestNumber($nr1, $nr2)
{
	if ($nr1 == $nr2)
		echo 'The two numbers are identical';
	elseif ($nr1 < $nr2)
		echo 'The first number is smaller';
	else
		echo 'The first number is larger';
}
echo largestNumber(12, 12);




/*The expected result is this:
    The first number is larger (if the first number is larger than the second number)
    The first number is smaller (if the first number is smaller than the second number)
    The two numbers are identical (if the two numbers are equal)

*/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 3 </p>';

/*
-- Exercise 3

	3.1
	Write a PHP script that:
	    - Create an array of John's expenses.
	    - Calculates the sum of John's expenses over the year
	*/

echo '<p style="font-weight: 900"> EXERCISE 3.1 </p>';
$expensesArray = array(
	'January' => 3700,
	'February' => 4700,
	'March' => 3700,
	'April' => 3000,
	'May' => 5000,
	'June' => 3000,
	'July' => 6000,
	'August' => 2500,
	'September' => 5000,
	'October' => 4000,
	'November' => 5000,
	'December' => 6000,
);
$sum = 0;
foreach ($expensesArray as $key => $value) {
	$sum += $value;
}
echo $sum;

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 3.2 </p>';
/*3.2
	Write a function that will:
	- Take an expense array as input
	- Calculate the sum of the expenses of the table
	- return this sum

*/
function arrayValue($array)
{
	$sum = 0;
	foreach ($array as $key => $value) {
		$sum += $value;
	}
	echo $sum;
}
echo arrayValue($expensesArray);




echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 4 </p>';


/*
-- Exercice 4

Write a PHP script that checks if a string is a palindrome.
A palindrome is a chain of letters whose order of letters remains the same whether read from left to right or from right to left.

Example : 
"kayak"
"xanax"
"poop"

*/


function checkString($string)
{
	if (strrev($string) == $string)
		echo 'This string ' . $string . ' is a polindrome';
	else
		echo 'This string ' . $string . ' is NOT a polindrome';
}
checkString('kayak');

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 5 </p>';

/*
-- Exercice 5
Write a function that checks if a number is a prime number.
A prime number is an integer greater than 1 that can only be divided by itself and 1.
*/

function prime($number)
{

	if ($number > 1 and (($number / $number) == 1))
		echo 'Number ' . $number . ' is prime integer';
	else
		echo 'It is not integer: ' . $number;
}
prime(-1.5);

function primeNumber($num)
{
	//$mod = 0;
	for ($i = 2; $i < 12; $i++) {
		$mod = $i % $num;
		//echo $i . '<br>';
		echo $mod;
	}
	//cho $i . '<br>';
	//echo $mod;


}
primeNumber(1);

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 6 </p>';

/*

-- Exercice 6
Write a htmlImages($src) function that:
    - takes a string as argument ($src)
    - display an html <img> tag with $src source
Example :
    htmlImages('skate.jpg') 
    	> Displays <img src='skate.jpg'>

*/

function htmlImages($src)
{
	return  '<img src=' . $src . '>';
}
//echo htmlImages('skate.jpg');

?>

<h3>The img element</h3>
<?php echo htmlImages('skate.jpg') ?>


<?php
echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 7 </p>';

/*
-- Exercice 7

Ecrire une fonction qui :
    - Prend en paramètre deux nombres.
    - Qui retourne le résultat de la multiplication des deux nombres
    - Tous les paramètres doivent avoir une valeur par défaut.
    - Appeler votre fonction avec les nombres 10 et 2.
    - Appeler votre fonction avec un seul nombre : 4

Write a function that:
    - Takes two numbers as parameter.
    - That returns the result of the multiplication of the two numbers
    - All parameters must have a default value.
    - Call your function with the numbers 10 and 2.
    - Call your function with a single number: 4
*/

function multiplication($num1 = 2, $num2 = 5)
{
	$result = $num1 * $num2;
	//use return to reference to this point next time when calling the function
	return $result;
}
//echo function: this will reference to the return $result. 
//there is also an option to use echo $result and function multiplication() instead.
echo multiplication(5, 10);

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 8 </p>';

/*
-- Exercice 8 :
	Write a PHP function that return the reverse(mirror) of an array.
	You can use only one other variable (simple, no array).
	You can only use count() or strlen() function.
*/

$revArray = array('Mod', 'Tue', 'Wed', 'Thur', 'Fri');
function reverseArray($array)
{
	$arrayLength = count($array);
	for ($i = $arrayLength - 1; $i >= 0; $i--) {
		echo $array[$i] . ' ';
	}
}
reverseArray($revArray);



echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 9</p>';

/*	
-- Exercise 9
Ecrire une fonction countWords($text) qui :
    - prend une chaine de caractère en argument ($text)
    - calcule le nombre de mots dans la chaine de caractère $text
    - retourne le résultat
Indice : il faut utiliser une fonction qui permet de découper une phrase en mots (déjà vu en cours)

Write a function 'countWords($text)' that:
    - takes a string of characters in argument ($text)
    - calculate the number of words in the $text string
    - return the result
Hint: use a function that allows you to split a sentence into words (already seen in class)

*/
$text = 'Hello how are you doing my dear friend. Hope you are doing well';
function countWords($text)
{
	$sepWords = explode(' ', $text);
	$sum = 0;
	foreach ($sepWords as $key => $value) {
		$sum += strlen($value);
	}
	echo $sum;
}
countWords($text);


echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 10 </p>';

$test = 'Hello how are you doing my dear friend. Hope you are doing well';
function countEachWords($test)
{
	$sepWords = explode(' ', $test);
	$arrayLength = count($sepWords);
	$new_array = array();
	foreach ($sepWords as $value) {
		$newValue = 1;
		if ($value == $value) {
			$newValue++;
			echo $value;
			echo $newValue . '<br>';
		} else
			echo $value;
	}
}


countEachWords($test);

/*
-- Exercice 10 :
Repeat the previous exercise and write a countEachWords($test) function that:
    - takes a string of characters in argument ($text)
    - for each word present in $text, calculate how many times this word appears
    - return the result as an associative array

For example : "this is a random sentence, it is totally random".
Expected result :
    array( "this" -> 1, 
            "is" -> 2,
            "a" -> 1,
            "random" -> 2
            ....... );
 ?>



























<<<<<<< HEAD










=======
>>>>>>> 36103b77d5f8bc8734fa1a20b157b49523414238







































































































