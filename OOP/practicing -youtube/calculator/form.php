<?php

//include 'include/class-autoload.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="calc.inc.php" method="post">
        <label for="">Number one</label><br>
        <input type="number" name="num1" id="num1" placeholder="Number one">
        <select name="oper" id="oper">
            <option value="add">Addition</option>
            <option value="sub">Substraction</option>
            <option value="div">Dividing</option>
            <option value="mul">Multiplication</option>
            <label for="">Number one</label><br>
            <input type="number" name="num2" id="num2" placeholder="Number two">
            <button type="submit" value="sunbmit" name="submit">Calculate</button>


        </select>

    </form>
</body>

</html>