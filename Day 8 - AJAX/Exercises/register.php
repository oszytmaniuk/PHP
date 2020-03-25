<?php
require_once 'db.php';
//defining variables:
$username = $email = $password = "";

if(isset($_POST['submit'])){
    //check the users:
    $username = $_POST['username'];
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method = "post">
        <input type="text" name="username" id="username" value="username">
        <input type="email" name="email" id="email" value="email">
        <input type="password" name="password" id="password" value="password">
        <input type="password" name="confPass" id="confPass" value="confPass">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>