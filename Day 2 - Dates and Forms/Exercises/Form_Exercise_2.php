<?php

/*
    - Exercise : 
	
		-- Part 1 :
	   		Create two pages:
	        - signin.php: User registration page, with the following fields:
	            - Name
	            - First name
	            - E-mail
	            - Password
	            - Confirmation of password
	            - Checkbox "Subscribe to the newsletter"

	        - recap-signin.php: Page showing the summary of the information entered.

		-- Part 2 :
			1. Using the first part, merge both the signin.php and recap-signin.php files into one.
			If we arrive on the page without the form being submitted, we will post the form, otherwise we will display the summary.

			2. Add validators on the different fields of the form:
				- The name and the first name are mandatory.
				- The e-mail must be between 8 and 50 characters long and should contains @
				- The fields "Password" and "Confirmation" must be identical and have at least 8 characters

			3. Add a box "I accept the conditions of use of the product", which must be checked.

			Bonus: Make the form values ​​reappear with each submission, in case of error.
    */

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>

	<?php
	$firstname = '';
	$lastname = '';
	$email = '';
	$pass = '';
	$pasConf = '';
	$ticked = false;
	if (isset($_POST['submit'])) {
		$firstname = $_POST['firstname'];
		$lastname = $_POST['laststname'];
		$email = $_POST['email'];
		$pass = $_POST['password'];
		$pasConf = $_POST['confpass'];
		echo "my Name is $firstname <br>";
		echo "my Family Name is $laststname <br>";
		echo "my email is $email <br>";
		echo "my Pass is $pass <br>";
	}

	

	?>

	<form action="recap-signin.php" method="POST">
		<input type="text" name="firstname" placeholder="Name"><br>
		<input type="text" name="laststname" placeholder="Family Name"><br>
		<input type="email" name="email" placeholder="email"><br>
		<input type="password" name="password" placeholder="password"><br>
		<input type="password" name="confpass"> <br>
		<label for="">Subscribe to the newsletter</label>
		<input type="checkbox" name="subscribe"><br>
		<input type="submit" name="submit">
	</form>

</body>

</html>