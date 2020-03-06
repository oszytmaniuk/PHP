<?php
/*
    Step 1: 
	    Let's assume you have an online shopping website.
	    Create a form to signin into your beautiful website.
	    It will ask : username, mail adress, phone number, password.
	    You have to make sure every fields are filled.
    Step 2: 
    	Once the user signin you have to do two things :
    		1. Create a file with all the information about your user.
    		You should also save the SESSION ID inside.
    		The file should look like 'template.txt'.
    		2. Create a session and save the username and the mail.
	Step 3:
		Create a page 'account.php' that will ask the user preferences about products (use a form).
		It will display a multi-select option.
		Example: hat, shoe, shirt, cap, glasses.... (whatever you're selling)
		When the user send the form, you have to save its informations into the file AND into the session.
    Step 4 (bonus): 
		
		Add a mechanism to retrieve session even if your cookie sessionID is gone.
		For this, you have to let the user logedin. 
		If it is successfully login, look for its session id (in the file) and try to retrieve the previous session.
 */

session_start();



//$_SESSION['username'] = $_POST['username'];


if (isset($_POST['submit'])) {
    if (
        !empty($_POST['username']) and !empty($_POST['email'])
        and !empty($_POST['phone']) and !empty($_POST['pwd'])
    ) {
        echo ' Welcome ' . $_POST['username'] .  ' to the website';
        $my_file = fopen('user_info.txt', 'w');
        $file_contain = $_POST;
        fwrite($my_file, print_r($file_contain, true));
        fclose($my_file);
    } else
        echo ' Dear user please filled in all the fields in the form';
}

?>


<form action="" method='POST'>
    <input type="text" name="username" id="" placeholder="username"><br>
    <input type="email" name="email" id="" placeholder="email"><br>
    <input type="text" name="phone" id="" placeholder="phone number"><br>
    <input type="password" name="pwd" id="" placeholder="password"><br>
    <input type="submit" value="submit" name='submit'><br>



</form>