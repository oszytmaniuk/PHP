<?php

/*
		1. Create a PHP script that will display the contents of a message.txt file, located in the same folder as this script.

		2. View the contents of the transform_to_table.txt file in an HTML table.
	*/

echo '<p style="font-weight: 900"> EXERCISE 1 </p>';

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

$file_handl = fopen('test_file.txt', 'w');
$file_content = 'Hello Oleg';

fwrite($file_handl, $file_content);
fclose('$file_handler');
*/

if (file_exists('message.txt')) {
	$fileContent = fopen('message.txt', 'r');
	while (!feof($fileContent)) {
		echo fgets($fileContent) . '<br>';
	}
	fclose($fileContent);
} else
	echo 'file is not exist';
?>

<table>
	<td>
		<?php
		$openFile = fopen('transform_to_table.txt', 'r');
		while (!feof($openFile)) {
			$new_line = fgets($openFile);
			echo '<tr>' . '<td>' . $new_line . '</td>' . '</tr>';
		}
		?>
	</td>

</table>