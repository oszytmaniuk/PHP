<?php
require_once 'db.php';
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
$query = "SELECT id, first_name, last_name FROM directors";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
        .green{
            color: green;
        };
        .red{
            color: red;
        }
</style>
    <div id="resultForm">Movie Added</div>
    <form method="post">
        <input type="text" class="text" placeholder="title" name="title"><br>
        <textarea name="description" id="description" cols="30" rows="10" placeholder ="about movie"></textarea><br>
        <input type="date" name="date" id="date" placeholder="release date">
        <select name="director" id="directors">
            <?php while ($row1 = mysqli_fetch_array($result)){?>
            <option value="<?php echo $row1[0];?>"><?php echo $row1[2];?></option>
            <?php }?>
        </select>
        <input type="submit" value="Add Movie" name="addMovie">
    </form>

 
 <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
 <script>
$(function(){
	$('input[type="submit"]').click(function(e){
		console.log("submit working");
		e.preventDefault();
		$.ajax({
			url: 'insertMovie.php',
			type: 'post',
			data: $('form').serialize(),
			success: function(result) {
				$('#resultForm').html('<div class="green">'+result+'</div>');
			},
			error: function(err){
				// If ajax errors happens
                $('#resultForm').html('<div class="red">'+result+'</div>');
			}
		});
	});
});
</script>
</body>
</html>