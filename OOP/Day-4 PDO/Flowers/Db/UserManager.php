<?php

namespace Flowers\Db;

//when namespace is specified -> use PDO is mandatory:
use PDO;

class UserManager {
    //define login function with email and pass variables:
    public function login($email, $pass){
    $dsn = 'mysql:host=localhost;dbname=flowers;port=3308;charset=utf8mb4';
    $pdo = new PDO($dsn, 'root', '');
    $queryLogin = "SELECT * FROM users WHERE email='?'";

    //return PDO statement:
    $prep = $pdo->prepare($queryLogin);
    
    //compile and execute query where '?' will correspond to EMAIL:
    $prep->bindValue(1, $email);

    //execute a PREP:
    $prep->execute();

    //And if EMAIL exists: check on nr of rows:
    $rowCount = $prep->rowCount();
    if($rowCount != 1){
        return "The user with this email: $email does not exist";
    } else{
        //returning a row to have a data for further 
        //checking on users details:
        $result = $pdo->query($queryLogin);
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $passHashed = $row['password'];
        if(password_verify($pass, $passHashed)){
            return "User logged in successfully!";
        } else{
            return "User, your password is incorrect!";
        }
    }
}

}