<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $firstname = '';
    $lastname = '';
    $email = '';
    $pass = '';
    $pasConf = '';
    $ticked = false;
    $myClass = 'defaultClass';
    if (isset($_POST['submit'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $pasConf = $_POST['confpass'];
        /*echo "my Name is $firstname <br>";
        echo "my Family Name is $lastname <br>";
        echo "my email is $email <br>";
        echo "my Pass is $pass <br>";
        echo "user is not Subscribed for a letter";*/
        if (empty($_POST['firstname']))
            echo 'Please provide my your name';
        /*if (isset($_POST['subscribe'])) {
        }*/
    };

    //var_dump($_POST);

    ?>

    <form action="" method="POST">
        <input type="text" name="firstname" placeholder="Name"><br>
        <input type="text" name="lastname" placeholder="Family Name"><br>
        <input type="email" name="email" placeholder="email"><br>
        <input type="password" name="password" placeholder="password"><br>
        <input type="password" name="confpass"> <br>
        <label for="">Subscribe to the newsletter</label>
        <input type="checkbox" name="subscribe" value="Checked"><br>
        <input type="submit" name="submit">
    </form>

</body>

</html>