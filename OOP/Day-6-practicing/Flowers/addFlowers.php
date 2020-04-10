<?php

$addFlowerName = trim($_POST['flowerName']);
$addFlowerPrice = trim($_POST['flowerPrice']);

echo $addFlowerName;
echo $addFlowerPrice;

insertFlowers($addFlowerName, $addFlowerPrice);

function insertFlowers($addFlowerName, $addFlowerPrice)
{
    $dsn = 'mysql:host=localhost;dbname=flowers;port=3308;charset=utf8mb4';
    $pdo = new PDO($dsn, 'root', '');
    $sql = "INSERT INTO flower (flower_name, flower_price) VALUES (?,?)";

    /*Two steps below is when you have several'?' in the query:
*/
    //1.return PDO statement to put a value instead of ?:
    $prep = $pdo->prepare($sql);

    //2.compile and execute query where '?' will correspond to EMAIL:
    $prep->execute([$addFlowerName, $addFlowerPrice]);

    return $addFlowerName ."and". $addFlowerPrice;

}
