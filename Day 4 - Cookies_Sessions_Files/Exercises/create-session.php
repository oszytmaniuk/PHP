<?php

//Start session
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Setting variables:
    $_SESSION['viewed'] = true;

    echo 'Variable are set'
    ?>
</body>

</html>