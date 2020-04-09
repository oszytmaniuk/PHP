<?php

require_once 'User.php';

class UserManager{

    public function user($name, $email){
    $user = new User($name, $email);
    //var_dump($user);
    return $user;
    }
}

