<?php
session_start();


//query DB -> select all from the products where id='$id'
$id = $_POST['filmId'];
$title = $_POST['title'];
$view = $_POST['view'];
$category = $_POST['category'];


//connecting to the DB to get the data based on product's id:
require_once 'database.php';
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);

$queryById = "UPDATE movies SET title='$title', view='$view', category='$category' WHERE id=$id";
//execute the query:
if (mysqli_query($conn, $queryById))
    echo 'Movie updated'    ;
else
    echo "Not Updated";
