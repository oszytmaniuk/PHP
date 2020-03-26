<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="mycart">

    </div>
    
</body>
</html>
<?php
  session_start();

  if(isset($_POST['total_cart_items']))
  {
	echo count($_SESSION['name']);
	exit();
  }

  if(isset($_POST['product_src']))
  {
    $_SESSION['name'][]=$_POST['product_name'];
    $_SESSION['price'][]=$_POST['product_price'];
    $_SESSION['picture'][]=$_POST['product_src'];
    $_SESSION['category'][]=$_POST['product_cat'];

    echo count($_SESSION['name']);
    exit();
  }

  if(isset($_POST['showcart']))
  {
    for($i=0;$i<count($_SESSION['picture']);$i++)
    {
      echo "<div class='cart_items'>";
      echo "<img src='".$_SESSION['picture'][$i]."'>";
      echo "<p>".$_SESSION['name'][$i]."</p>";
      echo "<p>".$_SESSION['price'][$i]."</p>";
      echo "</div>";
    }
    exit();	
  }
?>