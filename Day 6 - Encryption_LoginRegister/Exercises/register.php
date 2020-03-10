<?php
//including DB with connection
include_once 'database.php';
//Defining variables
$username = $message = $email = $password = "";

//olegsz
//123456

//user12
//user12

//user11
//user11

if (isset($_POST['submit'])) {
    //check the username
    $username = $_POST['username'];
    $okUserName = strlen($username) >= 3;
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
        //to check if the result is TRUE or FALSE
        var_dump($results);
    } else
        $message = "You are not logged in";
}

mysqli_close($conn);

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
    <title>Register</title>
</head>

<body class="w-25 m-auto">
    <form method='post' action=''>
        <div class="form-group">
            <label for="exampleInputUsername1">Username</label>
            <input type="text" name="username" class="form-control" id="exampleInputUsername1">

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1">

        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <input class="btn btn-primary" type="submit" value="Submit" name="submit">

        <p>
            <?php echo $message; ?>
        </p>
    </form>


</body>

</html>