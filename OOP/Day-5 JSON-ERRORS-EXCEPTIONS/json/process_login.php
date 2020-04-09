<?php

require_once 'UserManager.php';

$enterName = trim($_POST['name']);
$enterEmail = trim($_POST['email']);


if (isset($enterName) && isset($enterEmail)) {
    $userManager = new UserManager();

    //$user from UserManager is represented as $userLogged:
    $userLogged = $userManager->user($enterName, $enterEmail);
    if (!empty($userLogged)) {
        $userLogged->getName();
        $userLogged->getEmail();

        $jsonString = json_encode($userLogged, JSON_PRETTY_PRINT);
        //var_dump($jsonString);
        //create a file and save it there
        /*$myfile = fopen("json.json", "w") or die("Unable to open file!");
        $txt = $jsonString;
        fwrite($myfile, $txt);
        fclose($myfile);
        $fileToRedirect = fopen("newUser.php", "w");
        $txt1 = "<h1>Welcome new User on the page<h1>\n";
        fwrite($fileToRedirect, $txt1);
        fclose($fileToRedirect);
*/ 
        //create a file with a name of the user and its contain:
        file_put_contents($userLogged->getName().'.json',$jsonString);
        
    }
}
