<?php
require_once 'UserManager.php';

//defining variables for the users input:
$enterEmail = trim($_POST['email']);
$enterPas = trim($_POST['password']);



if (isset($enterEmail) && isset($enterPas)) {
//ASK SIMON: What does this do -> Create a new Object? - Y
    $userManager = new \Flowers\Db\UserManager();

    //store input data: Email and Pass in $userLogged variable:
    $userLogged = $userManager->login($enterEmail, $enterPas);
    
}
//if $userLogged is not empty we trigger a function 
//to get Email and Id:
	if (!empty($userLogged)) {
    session_start();
    //create a SESSION array user with two values:mail and id;
		$_SESSION['user']['mail']   = $userLogged->getMail();
    $_SESSION['user']['id']     = $userLogged->getId();
    header('Location: view-flowers.php');
    }
    

