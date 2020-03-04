<?php

/*Recursive functions

A function is recursive if it calls itself
*/

//display all numbers from X to 1

function rec($x)
{
    echo $x . '<br>';
    if ($x != 1)
        rec($x - 1);

    echo $x * 2 . '<br>';
}
rec(10);
