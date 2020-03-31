<?php
session_start();
$id = $_GET['id'];
if(isset($id)){
    echo 'this movie has id='.$id;
  require_once 'database.php';

  $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);

  if (!$conn)
    die("error to connect");
  else {
    //echo '<p> Connected Successfully </p><hr>';
  }
  
  $queryMovieById = "SELECT * FROM movies WHERE id=$id";
  $resultById = mysqli_query($conn, $queryMovieById);
  
  echo '<form>';
  while ($rowId = mysqli_fetch_assoc($resultById )) {
  echo '<div class="form-row">';
    echo '<div class="form-group col-md-6">';
      echo '<label for="inputEmail4">Title</label>';
      echo '<input type="email" class="form-control" id="inputTitle" placeholder="Email" value="'.$rowId['title'].'">';
    echo '</div>';
    echo '<div class="form-group col-md-6">';
      echo '<label for="inputPassword4">View</label>';
      echo '<input type="text" class="form-control" id="inputView" placeholder="Password" value="'.$rowId['view'].'">';
    echo '</div>';
  echo '</div>';
  echo '<div class="form-group">';
    echo '<label for="inputAddress">Category</label>';
    echo '<input type="text" class="form-control" id="inputCat" placeholder="1234 Main St" value="'.$rowId['category'].'">';
  echo '</div>';
  echo '<button type="submit" class="btn btn-primary" id="editFilmBtn" value="'.$rowId['id'].'">Update</button>';
}
echo '</form>';
}
?>
<h2 id="result"></h2>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
    // For the whole document --> look at it and add an event 'Click'
    // for each elemento in the DOM which contains class ".productBtn"
    $(function() {
      $('#editFilmBtn').click(function(e) {
        e.preventDefault();
        let filmId = $(this).val();
        let title = $('#inputTitle').val();
        let view = $('#inputView').val();
        let category = $('#inputCat').val();

        $.ajax({
          url: 'update-movie-logic.php',
          type: 'post',
          data: {
            filmId: filmId,
            title: title,
            view: view,
            category: category
          },
          success: function(result) {
            $('#result').html(result);
            $(location).attr('href', 'catalog.php');            
          },
        });
      })

    });
  </script>
