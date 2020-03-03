<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    //var_dump($_POST);
    //check if it exist
    $firstname = $_POST['firstname'];
    echo $firstname;
    $lastname = $_POST['lastname'];
    echo $lastname;
    $email = $_POST['email'];
    echo $email;
    $pass = $_POST['password'];
    echo $pass;


    ?>

</body>

</html>