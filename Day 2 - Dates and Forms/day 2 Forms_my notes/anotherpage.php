<?php
    var_dump($_GET);
    //check if it exist
    if (isset($_GET['firstname'])) {
        echo 'Hello, ' . $_GET['firstname'];
    } else {
        echo 'Waiting for this to be clicked';
    }
