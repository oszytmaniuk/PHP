<?php
include_once 'form.php';
include_once 'class-calc.php';

$oper = $_POST['oper'];
$n1 = $_POST['num1'];
$n2 = $_POST['num2'];

$cals = new Calc($oper, (int)$n1, (int)$n2);

try {
    echo $cals->calculator();
} catch (TypeError $e) {
    echo 'Error'.$e->getMessage();
}