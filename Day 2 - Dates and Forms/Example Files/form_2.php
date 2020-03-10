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

$firstname = '';
echo "oleg is good guy";

if(isset($_POST['firstname'])) {
  $firstname = $_POST['firstname'];
  echo $firstname;

}

  ?>
  <form action="data.php" method="POST">
    <input type="text" name="firstname" placeholder="Your first name" value="<?php echo $firstName; ?>">
    <!--<input type="text" name="email" placeholder="Your email">
    <input type="password" name="password" placeholder="Your password">-->
    <input type="submit" value="Send">
  </form>
</body>


</html>