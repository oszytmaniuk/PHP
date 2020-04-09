<?php
//first namespave and then REQUIRE!!!!
namespace Flowers\Db;

require_once 'User.php';

//when namespace is specified -> use PDO is mandatory:

use Flowers\User as FlowersUser;
use PDO;


class UserManager
{
    
    //define login function with email and pass variables:
    public function login($email, $pass)
    {
        $enterPas = $pass;
        
        $dsn = 'mysql:host=localhost;dbname=flowers;port=3308;charset=utf8mb4';
        $pdo = new PDO($dsn, 'root', '');
        $queryLogin = "SELECT * FROM users WHERE email=?";

        /*Three steps below is when you have '?' in the query:
        */
        //1.return PDO statement to put a value instead of ?:
        $prep = $pdo->prepare($queryLogin);

        //2.compile and execute query where '?' will correspond to EMAIL:
        $prep->bindValue(1, $email);
        
        //3.execute a PREP:
        $prep->execute();

        //And if EMAIL exists: check on nr of rows:
        $rowCount = $prep->rowCount();
        //var_dump($rowCount);

        if ($rowCount != 1) {
            return "The user with this email: $email does not exist";
        } else {
            //returning a row to have a data for further 
            //checking on users details:
            /*
            To use QUERY, when you dont have any '?' in the query
             $result = $pdo->query($queryLogin);
            */
            //var_dump($result);
            $row = $prep->fetch(PDO::FETCH_ASSOC);
            $passHashed = $row['password'];
            $dbEmail = $row['email'];
            $id = $row['id'];
            if (password_verify($enterPas, $passHashed)) {
                $user = new FlowersUser($dbEmail, $id);
                return $user;
            } else {
                return "User, your password is incorrect!";
            }
        }
    }

    
}


