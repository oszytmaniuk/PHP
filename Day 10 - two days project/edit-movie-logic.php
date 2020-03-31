<?php
session_start();


//query DB -> select all from the products where id='$id'
$id = $_GET['filmId'];

//connecting to the DB to get the data based on product's id:
require_once 'database.php';
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
$queryById = "SELECT * FROM movies WHERE id=$id";
$results = mysqli_query($conn, $queryById );
$row = mysqli_fetch_assoc($results);
$movieId = $row['id'];
echo $movieId;
