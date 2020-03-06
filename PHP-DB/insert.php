<?php

include_once 'database.php';
//Connect to DB
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, 'moviedb');
//echo '<p> Connection successfull. </p><hr>';

//Retrieve all directors:

$query = "INSERT INTO directors(name, nationality, date_of_birth) VALUES ('Martin Scorsese', 'USA','1942-11-17')";
//Execute a query:

$results = mysqli_query($conn, $query);
if ($results)
    echo 'Insert successfull';
else
    echo 'Insert went wrong';

//Close the connection:
mysqli_close($conn);
