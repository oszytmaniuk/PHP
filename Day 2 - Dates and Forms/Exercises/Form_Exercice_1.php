<?php

/*
- Exercise 1 :
	1. Create an HTML form with two textbox (first and last name) and a 'submit' button.
	When the 'submit' button is clicked, display the full name of the person.
	Do not worry about what's in the textbox once the button is clicked.

	2.Now, display the first and last name in the textbox, even after the button is clicked.

	<?php
	$firstName = '';
	//$_POST($firstName);
	if (isset($_POST["firstname"])) {
		$firstName = $_POST["firstname"];
		echo 'Hello, ' . $firstName . '<br>';
	}
	$lastName = '';
	if (isset($_POST["lastname"])) {
		$lastName = $_POST["lastname"];
		echo 'Thanks ' . $firstName . ' for your lastname: ' . $lastName;
	}
	var_dump($_POST);

	
	3. Suppose our site has only 5 authorized users.
	These users are contained in a table.
	For example: $users = array ("johnny hallyday", "simon bertrand", "tom hanks", "toto tata", "john");
	Check if the user, who enters his data, is one of the 5 users and display a suitable message.

		> Step 1: Create a PHP script that browses an array and checks whether a string is there (use a loop and a logical condition).
	    
	    > Step 2: Use step 1 to check if an user is allow

- Exercise 2 :
	1. Create an HTML form with one input (date picker) and a 'submit' button.
	When the 'submit' button is clicked, display the difference (in timestamp) between the date of today and the date in the input.
	Do not worry about what's in the input once the button is clicked.
*/
?>
< <!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Form Exercise 1</title>
	</head>

	<body>

		<?php
		/*
	$users = array("johnny hallyday", "simon bertrand", "tom hanks", "toto tata", "john");

	$firstName = '';
	$lastName = '';
	if (isset($_POST["submit"])) {
		$firstName = $_POST['firstname'];
		$lastName = $_POST['lastname'];

		//put all the results to FALSE as default:
		$found = false;

		//looping thru the array of users:
		foreach ($users as $key => $value) {
			if (trim($value) == $firstName . ' ' . $lastName) {
				$found = true;
				break;
			}
		}
		if ($found)
			echo "Welcome";
		else
			echo 'You\'re not allowed';
	};
	*/

		// Return a timestamp for today
		//$timeStamp = mktime($timeNow);

		//strototime to return a time from now. 
		//$timeNow = strtotime('now');

		// Display a format date for a specific timestamp
		//echo date('m-d-Y', $timeStamp);
		//$timeNow = '';
		if (isset($_POST['submit'])) {
			$timeNow = $_POST['date'];
			$timeStamp = strtotime($timeNow);
			//echo "timespan for picked date is $timeStamp <br>";
			$timeSpanNow = strtotime('now');
			//echo "timespan for now is $timeSpanNow <br>";
			$spanDif = $timeSpanNow - $timeStamp;
			echo "Time span btw picked and now is $spanDif";
		}




		?>

		<form action="" method="POST">
			<!--<input type="text" name="firstname" placeholder="First Name" value="<?php echo $firstName ?>">
		<input type="text" name="lastname" placeholder="Last Name" value="<?php echo $lastName ?>"> -->
			<input type="date" name="date" id="date">
			<input type="submit" name="submit">
		</form>
	</body>

	</html>