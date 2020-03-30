<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <title>Document</title>
</head>

<body class="w-25 m-auto">
    <form method='post' action='' id="loginForm">
        <div class="form-group">
            <label for="exampleInputUsername1">Username</label>
            <input type="text" name="username" class="form-control" id="inputUsername">
            <div id="userCheck"></div>

        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="inputPassword">
        </div>

        <input class="btn btn-primary" type="submit" value="Submit" name="submit" id="submit">
    </form>

    <!-- result of the AJAX response will be rendered inside below div -->
    <div id="result"></div>

    <!-- AJAX call -->
    <script>
        $(function() {
            $('#submit').click(function(e) {
                e.preventDefault();
                // using serialize function of jQuery to get all values of form
                const serializedData = $("#loginForm").serialize();
                console.log(serializedData);
                $.ajax({
                    //define the file where the data will be sent:
                    url: 'process_login.php',
                    //defining the methos of sending the data:
                    type: 'post',
                    data: serializedData,
                    //callback function that will be triggered on success:
                    success: function(result) {
                        $('#result').html(result);
                    },
                    //callback function that will be triggered on failure:
                    error: function(err) {
                        $('#result').html('<strong> ERROR </strong>');
                    }
                })
            })
        })
    </script>
    </script>
</body>

</html>