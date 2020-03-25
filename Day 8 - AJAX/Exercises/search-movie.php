<?php
require_once 'db.php';

if (isset($_POST['query'])) {
     
    $query = "SELECT * FROM movies WHERE title LIKE '{$_POST['query']}%' LIMIT 10";
    $result = mysqli_query($conn, $query);
 
  if (mysqli_num_rows($result) > 0) {
     while ($movie = mysqli_fetch_array($result)) {
      echo $movie['title']."<br/>";
    }
  } else {
    echo "<p style='color:red'>Movie not found...</p>";
  }
 
}
?>
