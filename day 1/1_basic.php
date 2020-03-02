<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo "oleg" ?>
    </title>
</head>

<body>
    <?php
    //this is a single comment

    /*fffffffffffffffff
*/

    //create a variable and assign a value
    $firstName = 'simon';

    /*there are some rules:
     - start with $
     - cannot start with a number. can use number after first letter
     - don't use symbols, like ().{}. Underscore is OK.
     - its a case sensetive*/

    //assigne number
    $popLux = 500000;
    $height = 2.5;

    //boolean
    $isThisTrue = false;

    //echo $popLux = 500000;

    //array
    $fruits = array('apple', 'orange', 'ananas');

    //same as:
    $fruits = array(
        'apple',
        'orange',
        'ananas'
    );

    //you can also create an element by each single element:
    /*$fruits[0] = 'apple';
    $fruits[1] = 'orange';
    $fruits[2] = 'ananas';
    */

    //add an element in ARRAY:
    $fruits[3] = "mango";
    // thisnwill place an element at the end of array"
    //$fruits[] = "mango";

    //to pring ARRAY: and all other varaibles. 
    //ECHO is just for displaying one element.
    echo $fruits[1];
    var_dump($fruits);

    //associated ARRAY
    $movies = array(
        'Star Wars' => 'SciFi Movie',
        'NightCrawler' => 'Thriller'
    );

    $movies['Bright'] = 'Fantasy';
    //to display value in the array:
    echo $movies['Bright'];
    var_dump($movies);

    //Multi-dimentional ARRAY:
    $movieType = array(
        'Thriller' => array('NightCrawler', 'Seven'),
        'SciFi' => array('Star Wars', 'Star Trek')
    );
    //adding a new Thriller movie:
    $movieType['Thriller'][] = 'New Movie';
    // to display a horizontal line:
    echo '<hr>';
    var_dump($movieType);
    //will show all array within Thriller
    var_dump($movieType['Thriller']);
    //retrieve one element whithin arrays
    echo $movieType['Thriller'][0];

    //echo "hello";


    echo '<hr>';
    //Mathematical operations:
    /*$result = 10 + 5;
    $result = 10 - 5;
    $result = 10 / 5;
    $result = 10 * 5;*/

    //$result = 2;
    $result = $result + 10;
    $result += 10;
    $result -= 10;
    $result /= 10;
    $result *= 5;

    //In case of incrementing/decrementing;
    //They all shows same value
    $result = $result + 1;
    $result += 1;
    $result++;
    //decrementing:
    $result--;

    echo '<hr>';
    //Know thetype of Variable/data
    $firstName = 'Oleg';
    $lastName = 'Szytmaniuk';
    $height = 1.83;
    //for concatenation use '.' This is better to use!!!!
    echo 'Hello ' . $firstName . ' ' . $lastName;
    echo '<br>Hello, $firstName';
    //to interpret VAR and get a value use ""
    echo "<br> Hello, $firstName";

    //get the type of VAR:
    echo '$firstName is of type : ' . gettype($firstName);

    //die()function that stops the PHP script
    echo '<hr>';
    //this line will be exdecuted BUT not the one below
    //die('this is going to stop');
    //this line will not be executed
    //echo 'dddddddddddddddddddddddddddd';

    //Escape charachters
    echo 'It\'s easy';



    ?>

</body>

</html>