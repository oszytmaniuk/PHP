<?php
//including DB to the file:
require_once '../db.php';
//connecting to the DB:
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
//check if the connection is successful:
if (!$conn)
    die("error to connect");
else {
    //echo '<p> Connected Successfully </p><hr>';
}

//defining variables:
//$username = $message = $email = $password = "";
//check on username:
$username = trim($_POST['username']);
$okUserName = strlen($username) >= 3;
echo $username;

//check the email:
$email = trim($_POST['email']);
$okEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
echo $email;
//check password:
$password = trim($_POST['password']);
$okPass = strlen($password) >= 6;
echo $password;
$cnfPass = trim($_POST['cnfPass']);
echo $cnfPass;

if ($okUserName && $okEmail && $okPass && ($password===$cnfPass)) {

    $hash = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO users(username, email, password)
    VALUES ('$username', '$email', '$hash')";
    $results = mysqli_query($conn, $query);
    //to check if the result is TRUE ao FALSE:
    var_dump($results);
    echo "User Registration Successfull!!!";
} else
    echo "Invalid input. Please enter all the input fields in form";

//close DB connection:
mysqli_close($conn);

/*if (isset($_POST['submit'])) {
    $user_name = $_POST['username'];
    $user_email = $_POST['email'];
    $user_password = $_POST['password'];
    $sql = "SELECT email FROM users WHERE email='$email'";
    $resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));
    $row = mysqli_fetch_assoc($resultset);
    if (!$row['email']) {
        $hash = password_hash($user_password, PASSWORD_DEFAULT);
        $query = "INSERT INTO users(username, email, password)
        VALUES ('$user_name', '$user_email', '$hash')";
        mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn) . "qqq" . $sql);
        echo "registered";
    } else {
        echo "1";
    }
}
*/