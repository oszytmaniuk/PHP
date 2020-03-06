<?php

include_once 'db.php';
//Connect to DB
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, 'moviesdb');
echo '<p> Connection successfull. </p><hr>';

?>