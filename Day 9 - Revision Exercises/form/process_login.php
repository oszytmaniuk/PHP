<?php
session_start();
//retrieving DB datails to connect:
require_once '../db.php';

//assigning variables for input data:
$enterUsername = trim($_POST['username']);
$enterPas = trim($_POST['password']);
//connecting to the DB:
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);

//query to check if username exist:
$query = "SELECT * FROM users WHERE username ='$enterUsername'";

//retrieving a result from the query:
$result = mysqli_query($conn, $query);

//checking numbers of ROWS -> if > 0 -> user is exist in DB:
$num_rows = mysqli_num_rows($result);
if ($num_rows != 1) {
    echo "<h2 class = 'red'> The user with username: $enterUsername does not exist. Please register first!</h2>";
}
//TODO -> redirect to REGISTRATION PAGE:
else {
    //gettign a row as a associative array to check by the colum name.
    $row = mysqli_fetch_assoc($result);
    //var_dump($row);
    $passHashed = $row['password'];
    if (password_verify($enterPas, $passHashed)) {
        $_SESSION['username'] = $enterUsername;
        echo "<h2 class = 'green'> Dear: $enterUsername you are logged in! </h2>";
        
    } else {
        echo "<h2 class = 'red'> Dear: $enterUsername your password is incorrect </h2>";
    }
}
