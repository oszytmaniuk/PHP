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
          <li class="breadcrumb-item active" aria-current="page">Cart (<span id="results"></span>)</li>
        </ol>
    </nav>
<?php
include_once 'products.php';
?>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
//AJAX call
<script>
  $(document).ready(function(){

  $.ajax({
    type:'post',
    url:'addToCart.php',
    data:{
    total_cart_items:"totalitems"
    },
    success:function(response) {
    document.getElementById("total_items").value=response;
    }
  });
  });
  function cart(id)
    {
	  $.ajax({
        type:'post',
        url:'addToCart.php',
        data:{
          product_src: $row['picture'],
          product_name:$row['name'],
          product_cat:$row['category'],
          product_price:$row['price']
        },
        success: function (result) {
            console.log(result);
            $('#results').show();
            $('#results').html(result);
          },
          error: function (err) {
            // IF AJAX ERROR HAPPENED
          }

      });
      function show_cart()
    {
      $.ajax({
      type:'post',
      url:'addToCart.php',
      data:{
        showcart:"cart"
      },
      success:function(response) {
        console.log(response);
            $('#mycart').show();
            $('#mycart').html(response);

     });
    }
</script>

</body>
</html>