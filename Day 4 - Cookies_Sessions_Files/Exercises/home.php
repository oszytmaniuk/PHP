<?php

var_dump($_POST);

$email = $_POST['email'];




if (isset($email)) {
    //checking if the email match the one from the users.txt:
    $openFile = fopen('users.txt', 'r');
    while (!feof($openFile)) {
        $new_line = fgets($openFile);
        //exploading the line to split it to 
        //get a separated line to half using ';'
        $line_splited = explode(';', $new_line);
        //second explode on email part to separate EMAIL word and actual email:
        $user_email = explode('=', $line_splited[0]);
        array_splice($user_email, 0, 1);
        var_dump($user_email);
    }
}
