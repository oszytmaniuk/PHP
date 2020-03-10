<?php

//Start the session:
session_start();
//including DB with connection
include_once 'database.php';
//Defining variables
$username = $email = $password = "";
$submit = $_POST['submit'];


if (isset($submit)) {
    //check the username
    $username = $_POST['username'];
    $okUserName = strlen($username) >=3;
    //check the email:
    $email = $_POST['email'];
    $okEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
    //check password:
    $password = $_POST['password'];
    $okPass = strlen($password) >= 6;
    // cgeck if all the parameters are correct
    if ($okUserName and $okEmail and $okPass) {
        $hash = password_hash($okPass, PASSWORD_DEFAULT);
        echo 'User :' . $username . ' with email: ' . $email . ' is logged in <br>';
        echo $hash;
        $query = "INSERT INTO users(username, email, password)
        VALUES ('$username', '$email', '$hash')";
        $results = mysqli_query($conn, $query);
        var_dump($results);
    } else
        echo "You are not logged in";
}


/*if (password_verify($password, $hash)) {
    echo 'Password OK';
    echo 'password is: ' . $hash . '<br>';
    echo 'passcon is: ' . $passcon . '<br>';
} else {
    echo 'Connection refused';
}*/
?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="username" id="" placeholder="username"><br>
        <input type="email" name="email" id="" placeholder="email"><br>
        <input type="password" name="password" id="" placeholder="password"><br>
        <input type="submit" value="Submit" name="submit"><br>



    </form>



</body>

</html>