<?php
require_once 'db.php';


$errors = array();

if (!empty($_POST)) {

	// Basics validations
	if (empty($_POST['title'])) {
		$errors[] = 'Title is mandatory';
	}

	if (empty($_POST['date'])) {
		$errors[] = 'Year of release is mandatory';
    }

    if(empty($_POST['description'])){
        $errors[] = 'Description is mandatory';
    }

    if(empty($_POST['director'])){
        $errors[] = 'Director is mandatory';
    }

	if (count($errors) === 0) {

		// If no errors, insert into DB
		require_once 'db.php';
        // Open a connection to the DBMS
        $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);

		$queryInsertMovie = "INSERT INTO movies(title, description, realease_date, director_id) 
		VALUES('" . $_POST['title'] . "', '" . $_POST['description'] . "','" . $_POST['date'] . "','" . $_POST['director']."')";

		// Send an SQL request to our DB
		$result_query = mysqli_query($conn, $queryInsertMovie);

		if ($result_query) {
			echo '<div class="green">Movie successfully addded !></div>';
		} else {
			echo '<div class="red">Movie successfully addded !></div>';
		}
	} else {
		echo implode('<br>', $errors);
	}
}

?>