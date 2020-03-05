<?php

/*
Comparable with a cookies. It's a global VAR stored in the SERVER!
It's a file. 

- Session ID - unique Id for individul session. When logging itsCreating a session.
Session Id is saved in COOKIEs.
Session can store a lot of DATA. The values of a session are automatically 
destroyed when you close your browser. But you can store it in the COOKIe.
*/

//Start the session before anything else! (html tags);
//this to be placed above!!!
session_start();
//create or update a session value:
if (isset($_SESSION['page_view']))
    $_SESSION['page_view'] += 1;
else
    $_SESSION['page_view'] = 1;

//deleting session:
//session_unset();

//Delete from a file system:
session_destroy();

var_dump($_SESSION);
var_dump($_COOKIE);
//removing key and value:
//unset ($array[0]);

//Regenerate session ID:
//session_regenerate_id();
