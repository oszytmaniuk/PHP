<?php
//Define DB constants
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
if ($conn){
    echo 'Connected';
} else {
    echo 'Connaction Failed';
}