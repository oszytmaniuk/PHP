<?php

include_once 'database.php';

$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, 'moviedb');

$query = 'SELECT directors.picture, directors.nationality, directors.date_of_birth, 
directors.name, movies.title, movies.views
FROM directors
INNER JOIN movies
ON directors.id=movies.director_id
WHERE directors.id =' . $_GET['id'];

$result = mysqli_query($conn, $query);
//We need to loop on the array to get all the movies for the director:
/*$row = mysqli_fetch_assoc($result);
*/

$row = mysqli_fetch_assoc($result);
//calculating Age:
//$todayDate = strtotime(date('Y'));
//echo $todayDate / (365 * 60 * 60 * 24);
//$birthDay = strtotime(date('Y', $row['date_of_birth']));

//echo $birthDay / (365 * 60 * 60 * 24);

//$years = $todayDate - $birthDay;

$years = date('Y') - substr($row['date_of_birth'], 0, 4);

//echo (date('Y') - 1970);


/*if ($birthDay >= 0) {
    $diff = abs($todayDate - $birthDay);
    $yearsTo1970 = floor($diff / (365 * 60 * 60 * 24));
    $years = $yearsTo1970 + (date('Y') - 1970);
} else {
    $diff = abs($todayDate - $birthDay);
    $years = floor($diff / (365 * 60 * 60 * 24));
}
*/







echo '<img src="' . $row['picture'] . '"><br>';
echo $row['name'] . '<br>';
echo $row['nationality'] . '<br>';
echo 'Age is: ' . $years . '<br><hr>';

/*$queryThreeMovies = 'SELECT * FROM movies 
ORDER BY views DESC 3';
*/
//here we loop titles untill we have all the lines done:


do {
    echo $row['title'] . '<br>';
    echo  'Views : ' . $row['views'] . '<br><hr>';
    
} while ($row = mysqli_fetch_assoc($result));

//SQL query to retieve a SUM of ALL the views for the picked director:
$allViews = 'SELECT SUM(views) FROM movies
WHERE director_id=' . $_GET['id'];

$viewsResult = mysqli_query($conn, $allViews);
$rowViews = mysqli_fetch_assoc($viewsResult);
echo '<p><strong>Total Movie Views is: '.$rowViews['SUM(views)'].'</strong></p>';
