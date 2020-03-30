<?php
session_start();
unset($_SESSION['totalNb']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Bootstrap CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


</head>

<body>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page"><span id="results"></span></li>
    </ol>
  </nav>

  <?php
  
  require_once 'db.php';
  $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);

  if (!$conn)
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
    echo '<img src="' . $row['picture'] . '" class="card-img-top" alt="...">';
    echo '<div class="card-body">';
    echo '<h5 class="card-title">' . $row["name"] . '</h5>';
    echo '<p class="card-text">' . $row["category"] . '</p>';
    echo '<h4 class="card-title">' . $row["price"] . ' EUR</h4>';
    echo '</div>';
    echo '<button value="' . $row['id'] . '"type="button" class="btn btn-secondary productBtn">Add to cart</button>';
    echo '</div>';
    // Create a button whit value = $row['id']
    echo '<br>';
  }
  echo '</div>';
  ?>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


  <script>
    // For the whole document --> look at it and add an event 'Click'
    // for each elemento in the DOM which contains class ".productBtn"
    $(function() {
      $('.productBtn').click(function(e) {
        e.preventDefault();
        let productId = $(this).val();
        $.ajax({
          url: 'addToCart.php',
          type: 'post',
          data: {
            productId: productId
          },
          success: function(result) {
            console.log(result);
            $('#results').html(result);
          }
        });
      })

    });
  </script>

</body>

</html>