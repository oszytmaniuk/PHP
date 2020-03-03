<?php

//How to create a function. always in lower case -> convention;

function my_function()
{
    echo 'Hello World';
}
//We need always to call the function to execute!!!
my_function();

//functioin with return:
function function1()
{
    return 'Return World';
}
//We need always to call the function to execute!!!
echo '<br>' . function1();
//you can also save in the variable:
$result = function1();

//Scope: define variable inside the function to access it after:

function print_message($msg, $msg2)
{
    echo '<br>' . $msg . ' ' . $msg2;
}
$message = 'Oleg';
print_message($message, 'Hello');


