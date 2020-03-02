<?php

/* - Exercise 1 :

-- Create your first fruit array containing: "Apple, Strawberry, Pineapple, Lemon".
-- Display the value of the 2nd element.

*/

$fruitsArray = array('apple', 'strawberry', 'pineapple');
echo $fruitsArray[2];

echo '<br>';
echo '<hr>';


/*
- Exercise 2
-- Create an associative array that contains the number in stock for each item: 20 T-Shirts, 10 Caps and 5 Shoes.
-- Display the stock of caps.
*/


$stockItems = array(
    'T-Shirts' => 20,
    'Caps' => 10,
    'Shoes' => 5
);
echo $stockItems['Caps'];

echo '<br>';
echo '<hr>';

/*
- Exercise 3

The clothing store has just received a new stock of shoes and caps.
-- Add 5 caps.
-- Add 20 shoes.
-- Display the shoe stock.
*/

$stockItems['Caps'] = 15;
echo $stockItems['Caps'];
$stockItems['Shoes'] = $stockItems['Caps'] + 20;
echo '<br> Number of shoes ' . $stockItems['Shoes'];

echo '<br>';
echo '<hr>';


/*
- Exercise 4
You have a list of contacts.
Each contact has a name, an email and a phone number.
Here is the list of these contacts:
> Name: Ricardo, Tel: 0677777777, Email: ricardo@gmail.com
> Name: Michael, Tel: 0606060606, Email: mj@gmail.com
> Name: Emmanuel, Tel: 0610101010, Email: manu@gmail.com

-- The goal of the exercise is to create an array that will contain all the information for ALL my contacts. I need to be able to access a contact's information easily and quickly.
*/

$contact = array(
    'Ricardo' => array(
        'name' => 'Ricardo',
        'tel' => '067777777',
        'email' => 'ricardo@gmail.com'
    ),
    'Michael' => array(
        'name' => 'Michael',
        'tel' => '067777778',
        'email' => 'mj@gmail.com'
    ),
    'Ema' => array(
        'name' => 'Emmanuel',
        'tel' => '067777779',
        'email' => 'manu@gmail.com'
    )
);
var_dump($contact['Ema']);

echo '<br>';
echo '<hr>';

?>

<!--
- Exercise 5
You need to create a web page with basics HTML tags.
In this page, you'll display all the characteristics of an imaginary character,
    from a role-play game.

    The character information will be saved in variables.
There is four (4) informations :
-- An avatar image
-- The last name
-- The first name
-- An array of characteristics (like attak point, defense point... put everything you want)
Use an associative array. 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>



</body>

</html>