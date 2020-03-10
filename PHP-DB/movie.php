<?php

echo '<p> This page is displaying ALL movies amd the poster </p>';

include_once 'database.php';
//Connect to DB
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, 'moviesdb');

//Retrieve last 3 movies based on the dates:

$query = 'SELECT movies.id, movies.poster, movies.title, movies.release_date, directors.name
FROM movies
INNER JOIN directors
ON movies.director_id=directors.id
WHERE movies.id =' . $_GET['id'];

//Execute a query:
$results = mysqli_query($conn, $query);
//Retrieve results as an associative array: It will give a current result.
//We need to repeat - LOOP to get all the results:
$row = mysqli_fetch_assoc($results);
var_dump($row);

if (isset($_GET['id'])) {
    //var_dump($row);
    echo '<img src="' . $row['poster'] . '"' . ' > ' . '<br>';
    echo 'Title :' . $row['title'] . '<br>';
    echo 'Release Date :' . $row['release_date'] . '<br>';
    echo 'Director :' . $row['name'] . '<br>';
    echo '<hr>';
    echo ' ID of the movie : ' . $_GET['id'];
}

//Close the connection:
mysqli_close($conn);
