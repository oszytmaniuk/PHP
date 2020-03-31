<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Home</title>
</head>

<body>
  <!-- nav bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Catalog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Playlist</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- search box -->
  <br>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>

  <?php
  require_once 'database.php';

  $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);

  if (!$conn)
    die("error to connect");
  else {
    //echo '<p> Connected Successfully </p><hr>';
  }
  //query unique movie categories:
  $queryMovieCat = "SELECT category, Count(*) AS total FROM movies GROUP BY category";
  $resultAllCat = mysqli_query($conn, $queryMovieCat);
  echo '<p><strong>Category</strong><p><br>';
  while ($rowCat = mysqli_fetch_assoc($resultAllCat)) {
    echo '<p>' . $rowCat['category'] . ' (' . $rowCat['total'] . ')</p>';
  }

  $queryMovieDate = "SELECT * FROM movies ORDER BY release_date DESC LIMIT 3 ";
  $resultByDate = mysqli_query($conn, $queryMovieDate);
  echo'<h3> Three most recent movies by release date! </h3><br>';
  echo '<div class="container">';
  echo '<div class="row">';
  while ($rowDate = mysqli_fetch_assoc($resultByDate)) {
    echo '<div class="col-sm">';
    echo '<img src="' . $rowDate['poster'] . '" class="card-img-top" style="width:300px; height: 450px" alt="...">';
    echo '<div class="card-body">';
    echo '<h5 class="card-title">' . $rowDate['title'] . '</h5>';
    echo '<p class="card-text">' . $rowDate['category'] . '</p>';
    echo '<p class="card-text">' . $rowDate['release_date'] . '</p>';
    echo '</div>';
    echo '</div>';
  }
  echo '</div>';
  echo '</div>';

  //query last added movies
  //closing the connection:
  mysqli_close($conn);
  ?>


  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>