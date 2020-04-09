<?php
require_once 'NumManager.php';
require_once 'Number.php';

$num = $_POST['number'];


if(isset($num)){
    $numbeObject = new NumManager($num);
    $numberLogged = $numbeObject->myNumber($num);

    if($numberLogged->getNumber() !=$num){
        echo '<p class="red"> Try Again the numbers are not matching</p>';
        
    } else
    {
        echo '<p class="green"> Your picked number is: '.$num . ' is equal to random num :'.$numberLogged->getNumber().'</p>';
    }
    
}