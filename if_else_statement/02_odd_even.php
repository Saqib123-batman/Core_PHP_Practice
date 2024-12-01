<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd_Even</title>
</head>
<body>
    <form action="02_odd_even.php" method="post">
        <label for="number">Number:</label>
        <input type="text" name="number"><br><br>
        <input type="submit" value="Check Number">
    </form><br>
</body>
</html>


<?php
    $number = $_POST["number"];

    if ($number % 2 == 0){
        echo "{$number} is Even number";
    }
    else{
        echo "{$number} is odd number";
    }

?>