<?php

/*
 strtotime function will 'transform' date, or string, into timestamp
 Argument must be in english
 */
echo strtotime('now') . '<br>';
$timeStamp = strtotime('22 April 2019');
echo date('d/m/Y', $timeStamp) . "<br>";

$timeStamp2 = strtotime('next Monday');
echo date('d/m/Y', $timeStamp2);
