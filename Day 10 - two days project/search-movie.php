<?php
require_once 'database.php';
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);

if (isset($_POST['query'])) {
     
    $querySearchMovie = "SELECT * FROM movies WHERE title LIKE '{$_POST['query']}%' LIMIT 10";
    $resultSearchMovie = mysqli_query($conn, $querySearchMovie);
 
  if (mysqli_num_rows($resultSearchMovie) > 0) {
     while ($movie = mysqli_fetch_array($resultSearchMovie)) {
      echo $movie['title']."<br/>";
    }
  } else {
    echo "<p style='color:red'>Movie not found...</p>";
  }
 
}
?>