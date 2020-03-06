<?php
/*
    Step 1: Create a page that indicates how often it has been visited by the user.
    No need for forms, just the $ _SESSION array

    Step 2: Also post the date of first visit by the client.

    Step 3: Add a 'Reset' submit (in a form, of course)
    When you click on the button, the counter is reset.
 */

session_start();

$_SESSION['name'] = 'Oleg';
$_SESSION['email'] = 'oszytmaniuk@gmail.com';
//$_SESSION['seen'] = true;
$_SESSION['time'] = time();


//var_dump($_SESSION);

if (isset($_POST['submit'])) {
    session_unset();
}


if (isset($_SESSION['seen'])) {
    $_SESSION['seen'] += 1;
    echo 'Hi ' . $_SESSION['name'] . '. You are visiting our page' . '<br>';
    print_r($_SESSION);
} else {
    $_SESSION['seen'] = 1;
    echo date('Y m d') . '<br>';
}

?>
<br>
<form action="" method='POST'>
    <br><input type="submit" value="Submit" name='submit'><br>

</form>