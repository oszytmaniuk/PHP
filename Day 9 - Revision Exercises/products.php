<?php
//This page will display all the products, with the picture first, then name, category and price.
require_once 'db.php';

$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);

if(!$conn)
   die("error to connect");
else {
    echo '<p> Connected Successfully </p><hr>';
}

//query to grab the data:
$query = "SELECT * FROM product";

$results = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($results)) {
    //var_dump($row);
    echo 'The product\'s picture :' . '<img src="'. $row['picture'] .'"'.'><br>';
    echo 'Name :' . $row['name'] . '<br>';
    echo 'Category :' . $row['category'] . '<br>';
    echo 'Price :' . $row['price'] . '<br>';
    echo '<hr>';
}
?>