<?php

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 1 </p>';

/*
-- Exercise 1 :

Write a recursive function that will:
- Take an integer (for xple $x) and display it.
- If $x is less than 50, display all numbers from $x to 50
*/

function rec($x)
{
    echo $x . '<br>';
    if ($x < 50)
        rec($x + 1);
    //this will execute when the value reached 50 
    //and will loop untill reach 40 as it stated in the function
    echo $x * 3 . '<br>';
}
rec(40);


echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 2 </p>';

/*
-- Exercise 2 :

Write a recursive function that will calculate the multiplication of two numbers using only the addition.

*/

function multiple($a, $b)
{
    if ($b > 0) {
        $result = $a + multiple($a, $b - 1);
        return $result;
    } else
        return 0;
}
echo multiple(0, 7);



echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 3 </p>';


function factor($f)
{
    if ($f > 1)
        $fac = $f * factor($f - 1);
    else
        $fac = $f;
    return $fac;
}
echo factor(5);

/*
-- Exercise 3 : 

Ecrire une fonction récursive qui va calculer le factorielle d'un nombre.
La factorielle de 5 se note 5! et équivaut à 5! = 5 * 4 * 3 * 2 * 1.
La factorielle de 5 est donc égal à 120 (5! = 120). 
Voici l'équation d'une factorielle : n! = n * (n – 1) * … * 3 * 2 * 1

Write a recursive function that will calculate the factorial of a number.
The factorial of 5 is 5! and equals to    5! = 5 * 4 * 3 * 2 * 1.
The factorial of 5 is therefore equal to 120 (5! = 120).
Here is the equation of a factorial: n! = n * (n - 1) * ... * 3 * 2 * 1









































