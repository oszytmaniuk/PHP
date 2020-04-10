<?php

require_once 'Train.php';


$train1 = new Train(1, '10:30:00', '11:00:00');
$train2 = new Train(11, '11:30:00', '12:00:00');
$train3 = new Train(1111, '12:30:00', '13:00:00');
$train4 = new Train(12, '13:30:00', '14:00:00');
$train5 = new Train(13, '14:30:00', '15:00:00');

$trainsArray = array($train1, $train2, $train3, $train4, $train5);

foreach($trainsArray as $train) {
	echo $train->getTime();
}