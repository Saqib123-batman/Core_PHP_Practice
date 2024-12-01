<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="05_login_form.css">
    <title>Login Form</title>
</head>
<body>
    <form action="05_login_form.php" method="post">
        <label>User Name:</label>
        <input type="text" name="user_name"><br><br>
        <label>Password:</label>
        <input type="password" name="password"><br><br>
        <input type="submit" value="Submit">
    </form><br>
    <div class="php-output">
<?php
    $user_name = $_POST["user_name"];
    $password = $_POST["password"];

    $match_user_name = "saqib uzair";
    $match_password = "12345678";


    if ($user_name == $match_user_name & $password == $match_password){
        echo "Successful Login";
    }
    else {
        echo "Incorrect user name or password";
    }
?>
</div>
</body>
</html>
