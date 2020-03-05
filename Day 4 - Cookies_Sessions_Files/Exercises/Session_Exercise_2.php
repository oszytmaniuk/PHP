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
$_SESSION['first_visit'] = time();

//var_dump($_SESSION);


$first_date_visit = '';
if (isset($_SESSION['seen'])) {
    $_SESSION['seen'] += 1;
    echo 'Hi '. $_SESSION['name']. '. You are visiting our page'. '<br>';
    $ses_date = time();
    echo 'the first visit of the client was on '.$ses_date.'<br>'; 
    print_r($_SESSION);
    
} else
    $_SESSION['seen'] = 1;
    echo 'visited only once';
    $first_date_visit = $_SESSION['first_visit'];
 echo $first_date_visit;