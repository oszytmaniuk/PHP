<?php

/*
		Create a script that saves in the last_access.log file the timestamp of this time (now).

		We will replace the old timestamp.

		Choose the right setting to open the file
	 */


$my_file = fopen("last_access.log", "w");
$file_content = time();
fwrite($my_file, $file_content);
echo $file_content;
fclose($my_file);
//unlink($my_file);
