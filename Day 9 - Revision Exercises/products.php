<?php
//This page will display all the products, with the picture first, then name, category and price.
require_once 'db.php';
;
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);

if(!$conn)
   die("error to connect");
else {
    //echo '<p> Connected Successfully </p><hr>';
}

//query to grab the data:
$query = "SELECT * FROM product";

$results = mysqli_query($conn, $query);

echo '<div id="item-div">';
while ($row = mysqli_fetch_assoc($results)) {
    //var_dump($row);
    echo '<div class="card" style="width: 18rem;">';
    echo '<img src="'. $row['picture'] .'" class="card-img-top" alt="...">';
    echo '<div class="card-body">';
    echo '<h5 class="card-title">'.$row["name"].'</h5>';
    echo '<p class="card-text">'.$row["category"].'</p>';
    echo '<h4 class="card-title">'.$row["price"].' EUR</h4>';
    echo '</div>';
    echo '<button value="' . $row['id'] . '"type="button" class="btn btn-secondary productBtn">Add to cart</button>';
    echo '</div>';
    
    // Create a button whit value = $row['id']
    echo '<br>';
}
echo '</div>';

?>