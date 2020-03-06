<?php

include_once 'database.php';
//Connect to DB
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, 'moviedb');
//echo '<p> Connection successfull. </p><hr>';

//Retrieve all directors:

$query = "INSERT INTO movies(title, views, director_id, poster, release_date) VALUES ('Casino',120,4,'/poster/casino.jpg','1997-10-2')";
//Execute a query:

$results = mysqli_query($conn, $query);
if ($results)
    echo 'Insert successfull';
else
    echo 'Insert went wrong';

//Close the connection:
mysqli_close($conn);
