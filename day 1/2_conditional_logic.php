<?php

/*//IF 
$number1 = "50";

if ($number1 < 60) {
    echo 'you below';
} else {
    echo 'no it\'s above';
}


echo '<hr>';

$number2 = '30';

if ($number2 === 20) {
    echo 'its equal';
} else {
    echo 'no it\'s not equal';
}

//Compare Operators: same value
if ($var1 = $var2)
    //Compare Operators same value and different types
    if ($var1 == $var2)
        //Compare Operators same value and type
        if ($var1 === $var2)
            //Compare Operators: not equal
            if ($var1 != $var2)

                //3. Logical Operators
                //AND &&
                //OR pipes
                //XOR - one condition OR other one is TRUE
                //NOT
                $var1 = false;
//these two below are the same!
if ($var1 == true)
    if ($var1)
        //NOt TRUE = '!';
        if (!$var1)

            echo '<hr>';



//4. Switch
*/
$movie = 'Jur Park';
switch ($movie) {
    case 'Jur Park':
        echo 'YOu like Sci Fi';
        break;

    default:
        echo 'Oleg';
        break;
}

//break make you exit from a block of code
