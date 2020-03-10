<?php

include_once 'database.php';
$enterName = $enterPas = $logInCorrect = $logNotCorrect = "";

if (isset($_POST['login'])) {
    $enterName = $_POST['enterName'];
    $notEmptyName = strlen($enterName) > 0;

    $enterPas = $_POST['enterPas'];
    $notEmptyPas = strlen($enterPas) >= 6;
    //Selecting a user as per his/her data in the username field.
    $sqlSelectUser = 'SELECT*FROM users WHERE username=' . $notEmptyName;
    $results = mysqli_query($conn, $sqlSelectUser);
    $rows = mysqli_fetch_assoc($results);
    var_dump($rows);


    /*while ($rows = mysqli_fetch_assoc($results)) {
        var_dump($rows['username']);
        if ($notEmptyName === $rows['username']) {
            echo 'Username ' . $notEmptyName . 'exist in the DB';
            if ($notEmptyPas === $rows['password']) {
                echo 'User with a username ' . $notEmptyName . 'is logged in';
            }
        } else
            echo 'Please type your username';
        /*if ($notEmptyName === $row['username'] and $notEmptyPas === $rows['password']) {
            var_dump($rows);
            $logInCorrect = 'User ' . $notEmptyName . ' is loged in!';
        } else
            $logNotCorrect = 'Please check your email or password.';
    }*/
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    <title>Document</title>
</head>

<body class="w-25 m-auto">
    <form method='post'>
        <div class="form-group">
            <label for="exampleInputUserName">User Name</label>
            <input type="text" name="enterName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="enterPas" class="form-control" id="exampleInputPassword1">
        </div>
        <input type="submit" name="login" class="btn btn-primary" value="Log IN">
    </form>
    <!--<p>
        <strong><?php echo $logInCorrect; ?></strong>
    </p>
    <p>
        <strong><?php echo $logNotCorrect; ?></strong>
    </p>-->
</body>

</html>