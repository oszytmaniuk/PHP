<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My Form Example</title>
</head>

<body>

  <?php
/* 
  Keep the firstname in the input
*/ 

$firstName = '';

if(isset($_POST['firstName'])) {
  $firstName = $_POST['firstName'];
}

  ?>
  <form action="data.php" method="POST">
    <input type="text" name="firstName" placeholder="Your first name" value="<?php echo $firstName; ?>">
    <input type="text" name="email" placeholder="Your email">
    <input type="password" name="password" placeholder="Your password">
    <input type="submit" value="Send">
  </form>
</body>


</html>