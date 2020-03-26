<?php
  session_start();
  require_once 'db.php';
  // Get id of the product
  if(!empty($_POST['productId'])){

    $id = $_POST['productId'];
    
    //query to grab the data:
    $query = "SELECT * FROM product WHERE id = " . $id;
    $results = mysqli_query($conn, $query);

    if(isset($_SESSION['product'])) {
      //add
      //$_SESSION['products']['name'] = $row['name'];
      $_SESSION['product']['id']  = $id;
      $_SESSION['product']['name']  = $row['name'];
    
    } else {
      //create
      echo " do something";
    }
  }
  
  

  // add rresult to the session array


  if(isset($_SESSION['totalNb']))
      $_SESSION['totalNb'] += 1;
  else
      $_SESSION['totalNb'] = 1;
  
  
      echo $_SESSION['totalNb'];

if(isset($_SESSION['product'])) {
      //add
      //$_SESSION['products']['name'] = $row['name'];
      $_SESSION['product']['id']  = $id;
      $_SESSION['product']['name']  = $row['name'];
    
    } else {
      //create
      echo " do something";
    }

  /*
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
  */
?>