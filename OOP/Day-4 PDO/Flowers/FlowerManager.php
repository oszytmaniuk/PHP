<?php

namespace Flowers\Db;

require_once 'Flower.php';

use PDO;

class FlowerManager
{

    public function findAll()
    {

        $dsn = 'mysql:host=localhost;dbname=flowers;port=3308;charset=utf8mb4';
        $pdo = new PDO($dsn, 'root', '');
        $queryLogin = "SELECT * FROM flower";

        //query result:
        $result = $pdo->query($queryLogin);

        foreach($result as $row){
            echo $row['flower_name'] . 'and'. $row['flower_price'];
        }
        
        }
        
    }


