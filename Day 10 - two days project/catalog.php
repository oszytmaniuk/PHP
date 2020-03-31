<?php
session_start();
session_unset();
?>
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
  <?php
 include_once 'navbar.php';
 ?>
 

  <?php
  require_once 'database.php';

  $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);

  if (!$conn)
    die("error to connect");
  else {
    //echo '<p> Connected Successfully </p><hr>';
  }
  
  $queryMovieDate = "SELECT * FROM movies ORDER BY id DESC LIMIT 100 ";
  $resultByDate = mysqli_query($conn, $queryMovieDate);
  echo '<h3> Catalog of the movies! </h3><br>';
  echo '<div class="container">';
  echo '<div class="row">';
  while ($rowDate = mysqli_fetch_assoc($resultByDate)) {
    echo '<div class="col-sm">';
    echo '<img src="' . $rowDate['poster'] . '" class="card-img-top" style="width:300px; height: 450px" alt="...">';
    echo '<div class="card-body">';
    echo '<h5 class="card-title">' . $rowDate['title'] . '</h5>';
    echo '<p class="card-text">' . $rowDate['category'] . '</p>';
    echo '<p class="card-text">' . $rowDate['id'] . '</p>';
    echo '<button value="'.$rowDate['id'].'"type="button" class="btn btn-outline-secondary" name="edit">Edit</button><hr>';
    echo '</div>';
    echo '</div>';
  }
  echo '</div>';
  echo '</div>';

  //query last added movies
  //closing the connection:
  mysqli_close($conn);
  ?>
 <h3 id="result"></h3>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <script>
    // For the whole document --> look at it and add an event 'Click'
    // for each elemento in the DOM which contains class ".productBtn"
    $(function() {
      $('.btn').click(function(e) {
        e.preventDefault();
        let filmId = $(this).val();
        $.ajax({
          url: 'edit-movie-logic.php',
          type: 'get',
          data: {
            filmId: filmId
          },
          success: function(result) {
            $('#result').html(result);
            $(location).attr('href', 'edit-movie.php?id='+result);
          },
        });
      })

    });
  </script>
  
</body>

</html>