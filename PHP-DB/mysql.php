<?php
//include fubnction to connect with an external file/path
include_once 'database.php';
//Connect to DB
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, 'moviesdb');
echo '<p> Connection successfull. </p><hr>';

//Retrieve all directors:

$query = 'SELECT * FROM directors';
//Execute a query:
$results = mysqli_query($conn, $query);
//Retrieve results as an associative array: It will give a current result.
//We need to repeat - LOOP to get all the results:
while ($row = mysqli_fetch_assoc($results)) {
    //var_dump($row);
    echo 'Name :' . $row['name'] . '<br>';
    echo 'Nationality :' . $row['nationality'] . '<br>';
    echo 'Birth date :' . $row['date_of_birth'] . '<br>';
    echo '<hr>';
}
//Close the connection:
mysqli_close($conn);
