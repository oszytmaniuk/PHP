<?php
/*
COOKIES!!!

A cookie is a small file(max size is a 4kb). Stored on a client side on the browser.
Once a Cookie created all the pages can share them.
Cookies has a lifetime! 
*/

//Create a cookies:
/*username > key
Oleg - value;
time()+10 - lifetime is a 10seconds. It may be 1 or 2 years!!!!.

*/
setcookie('username', 'Oleg', time() + 10);
//accessing a username inside array:
echo $_COOKIE['username'];
var_dump($_COOKIE);
