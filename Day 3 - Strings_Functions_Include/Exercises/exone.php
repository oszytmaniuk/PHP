<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .class {
        color: red;
    }
</style>

<body>
    <?php
    include 'form.php';
    ?>
    <br>
    <div>
        <?php
        if (isset($_POST['Submit'])) {
            echo strtoupper(($_POST['name']));
        }
        ?>
    </div>
    <br>
    <div>
        <?php
        if (isset($_POST['lowercase'])) {
            echo strtolower(($_POST['name']));
        }
        ?>
    </div>
    <div>
        <?php
        if (isset($_POST['eachCap'])) {
            echo ucwords(($_POST['name']));
        }
        ?>
    </div>
    <div>
        <?php
        if (isset($_POST['oneCap'])) {
            echo ucfirst(($_POST['name']));
        }
        ?>
    </div>
    <div>
        <?php
        /*
        Finding a dot and retieve a text until DOT using EXPLODE function:
        if (isset($_POST['untilDot'])) {
            $myArraay = explode('.', ($_POST['name']));
            echo ($myArraay)[0];
        }
        */
        
        ?>
    </div>




</body>

</html>