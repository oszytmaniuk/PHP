<?php
//include fubnction to connect with an external file/path
include_once 'database.php';
//Connect to DB
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, 'moviedb');

//Retrieve all directors:

$query = 'SELECT * FROM directors';
//Execute a query:
$results = mysqli_query($conn, $query);
//Retrieve results as an associative array: It will give a current result.
//We need to repeat - LOOP to get all the results:
while ($row = mysqli_fetch_assoc($results)) {
    //var_dump($row);
    echo '<img src="' . $row['picture'] . '"' . ' > ' . '<br>';
    echo 'Name :' . $row['name'] . '<br>';
    echo '<hr>';
}
//Close the connection:
mysqli_close($conn);
