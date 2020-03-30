<?php
session_start();

//number of products by clicking the button:
if (isset($_SESSION['totalNb'])) {
  $_SESSION['totalNb'] += 1;
  
  
} else
  $_SESSION['totalNb'] = 1;

  echo $_SESSION['totalNb'];
//query DB -> select all from the products where id='$id'
$id = $_POST['productId'];

//connecting to the DB to get the data based on product's id:
require_once 'db.php';
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
$queryById = "SELECT * FROM product WHERE id=$id";
$results = mysqli_query($conn, $queryById );
$row = mysqli_fetch_assoc($results);
var_dump($row);







