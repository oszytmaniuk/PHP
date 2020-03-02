<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!--if action = "" this will return a SEND data from the form into this page-->
    <form method="get" action="">
        <input type="text" placeholder="Your Name" name="firstname">
        <input type="submit" value="Send">
    </form>


    <?php
    var_dump($_GET);
    //check if it exist
    if (isset($_GET['firstname'])) {
        echo 'Hello, ' . $_GET['firstname'];
    } else {
        echo 'Waiting for this to be clicked';
    }

    ?>

</body>

</html>