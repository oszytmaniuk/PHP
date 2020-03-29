<?php
//including DB to the file:
require_once '../db.php';
//connecting to the DB:
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
//check if the connection is successful:
if (!$conn)
    die("error to connect");
else {
    echo '<p> Connected Successfully </p><hr>';
}

//defining variables:
//$username = $message = $email = $password = "";
//check on username:
$username = trim($_POST['username']);
$okUserName = strlen($username) >= 3;
//check the email:
$email = trim($_POST['email']);
$okEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
//check password:
$password = trim($_POST['password']);
$okPass = strlen($password) >= 6;
$cnfPass = trim($_POST['cnfPass']);

if((isset($username) && $okUserName) && (isset($email) && $okEmail) && (isset($password)===isset($cnfPass))){
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO users(username, email, password)
    VALUES ('$username', '$email', '$hash')";
    $results=mysqli_query($conn, $query);
    //to check if the result is TRUE ao FALSE:
    var_dump($results);
    echo "User Registration Successfull!!!";
}
else 
    echo "Invalid input. Please enter all the input fields in form";

//close DB connection:
mysqli_close($conn);