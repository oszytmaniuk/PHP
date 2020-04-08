<?php

/* Default way to import : */
//require_once 'namespace.php';
//require_once 'namespace2.php';

// Autoload function : directly load all the files we
// need in the code.

// Autoload will look in the current folder


// If classes are inside the current folder, just use : spl_autoload_register();
// Otherwise, you can target a specific folder like this :

function projectAutoload($class)
{
  include 'classes/' . $class . '.php';
}

spl_autoload_register('projectAutoload');

$myClass = new MyClass();
$myClass->doStuff();