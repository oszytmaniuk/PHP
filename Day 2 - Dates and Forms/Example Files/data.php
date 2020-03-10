  <?php

  if (!empty($_POST)) {
    $firstName = $_POST['firstname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $filteredMail = filter_var($email, FILTER_VALIDATE_EMAIL);
    var_dump($filteredMail);

    if (trim($firstName) == 'Oleg' && $filteredMail && strlen($password) > 6) {
      echo 'Welcome, Simon';
    } else {
      echo 'You\'re not allow to view this page';
    }
  }
  ?>

  <form action="" method='POST'>
  <input type="text" name="firstname" id="">
  <input type="text" name="email" id="email">
  <input type="password" name="password" id="password">
  <input type="submit" value="submit" name="submit">

  
  
  </form>