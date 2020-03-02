<?php

//1. FOR loop

for ($i = 0; $i < 10; $i++) {
    echo $i . '<br>';
}

$fruits = array('apple', 'mango', 'kiwi');
//to give us a number of the elements within array
$size = count($fruits);

for ($i = 0; $i < $size; $i++) {
    echo $fruits[$i] . '<br>';
}


//2. While
$number = 10;
while ($number >= 1) {
    echo $number . '<br>';
    $number--;
}
echo '<hr>';

//3. Do ... While
$number = 10;

do {

    echo "oleg";
} while ($number < 9);


//4. ForEach Loop ONLY for ARRAYs

$fruits = array('apple', 'mango', 'kiwi');

foreach ($fruits as $key => $value) {
    echo $value . '<br>';
}

foreach ($fruits as $key => $value) {
    $fruits[$key] = 'banana';
}
var_dump($fruits);
