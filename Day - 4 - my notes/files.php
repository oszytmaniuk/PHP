<?php
/*
1. Ho wot read files:
We need to use a path!!!!
*/


/*
Check if file exist:
    if(file_exist('movie.txt')){
        $fileContent = file_get_content('movie.txt');
        echo $fileContent;
    }
    */

/*
fopen() - just open a file -> we need to save it in a variable to acces it.
- To retrieve a content: But this will show you just first line. 
echo fgets($file_handler);
- We need loop thru the lines!!!

while (!feof($file_handler)) {
    echo fgets($file_handler) . '<br>';
}
*/
/*
Wrtiting in the file.
Open a file in a writing mode. 
If it doesnt exist , it will create it.
*/
$file_handl = fopen('test_file.txt', 'w');
$file_content = 'Hello Oleg';

fwrite($file_handl, $file_content);
fclose('$file_handler');
