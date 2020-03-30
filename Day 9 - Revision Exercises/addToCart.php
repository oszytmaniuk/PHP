<?php
session_start();
//require_once 'db.php';

// Get id of the product

// add rresult to the session array

if (isset($_SESSION['totalNb'])) {
  $_SESSION['totalNb'] += 1;
  
  
} else
  $_SESSION['totalNb'] = 1;

//query DB -> select all from the products where id='$id'
$id = $_POST['productId'];
echo $_SESSION['totalNb'];





//array of products:
// $item_array = array(
//   'item_id' => $row['id'],
//   'item_cat' => $row['category'],
//   'item_price' => $row['price']
// );
