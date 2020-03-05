<?php

session_start();


if (isset($_SESSION['viewed'])) {
    echo 'You have visited the page create-session ' . $_SESSION['viewed'];
} else
    echo 'not visited';
