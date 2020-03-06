<?php

echo '<p> This page is displaying last 3 movies descending based on the dates </p>';

include_once 'database.php';
//Connect to DB
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, 'moviedb');

//Retrieve last 3 movies based on the dates:

$query = 'SELECT * FROM movies ORDER BY release_date DESC LIMIT 3';
//Execute a query:
$results = mysqli_query($conn, $query);
//Retrieve results as an associative array: It will give a current result.
//We need to repeat - LOOP to get all the results:
while ($row = mysqli_fetch_assoc($results)) {
    //var_dump($row);
    echo 'Title :' . $row['title'] . '<br>';
    echo 'Release Date :' . $row['release_date'] . '<br>';
    echo '<hr>';
}
//Close the connection:
mysqli_close($conn);
