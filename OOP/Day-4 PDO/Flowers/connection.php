<?php
require_once 'Db/UserManager.php';

//defining variables for the users input:
$enterEmail = trim($_POST['email']);
$enterPas = trim($_POST['password']);



if (isset($enterEmail) && isset($enterPas)) {
    $userManager = new \Flowers\Db\UserManager();
    $userLogged = $userManager->login($enterEmail, $enterPas);
    echo $enterEmail.'<br>';
    echo $enterPas;
}
/*
	if (!empty($userLogged)) {
		$_SESSION['user']['mail']   = $userLogged->getMail();
		$_SESSION['user']['id']     = $userLogged->getId();
    }*/
    

