<?php
//load automatically classes:
spl_autoload_register();

$account1 = new Bankacc(2000);

echo $account1->withdrawal(12);

echo $account1->deposit(1500);
var_dump($account1);

// $client1 = new Client('Oleg', 'M', 'Lux');
// var_dump($client1);

//echo Log::display();


