<?php
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'pass');


if ($conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME))
    echo '<p> Connection successfull. </p><hr>';
