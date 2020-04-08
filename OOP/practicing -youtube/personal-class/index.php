<?php
include 'includes/autoloader.inc.php'

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
    //echoing static method :: 
        $person1 = new Person('Oleg', 'Grey', 37);

        echo $person1->getDA();
    ?>
</body>
</html>