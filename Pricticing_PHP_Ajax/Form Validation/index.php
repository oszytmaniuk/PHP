<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <form action="mail.php" method="POST">
        <input type="text" name="name" id="mail-name" placeholder="Full name">
        <br>
        <input type="text" name="email" id="mail-email" placeholder="E-mail">
        <br>
        <select name="gender" id="mail-gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <br>
        <textarea id="mail-message" name="message" placeholder="Message"></textarea>
        <br>
        <button id="mail-submit" type="submit" name="submit">Send e-mail</button>
        <!-- place a container for a message -->
        <p class="form-message"></p>
    </form>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function() {
            $("form").submit(function(e) {
                e.preventDefault();
                const name = $("#mail-name").val();
                const email = $("#mail-email").val();
                const gender = $("#mail-gender").val();
                const message = $("#mail-message").val();
                const submit = $("#mail-submit").val();
                $(".form-message").load("mail.php", {
                    //on the right are the values from the above constants
                    name: name,
                    email: email,
                    gender: gender,
                    message: message,
                    submit: submit
                });
            });
        });
    </script>
</body>

</html>