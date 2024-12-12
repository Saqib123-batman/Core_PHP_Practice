<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <form action="09_for.php" method="post">
        <label>Enter the number for factorial:</label>
        <input type="text" name="number">
        <input type="submit" value="Calculate">
    </form><br><br>
</body>
</html>

<?php

    $number =  $_POST["number"];
    $factorial = 1;

    for ($i=$number; $i>0; $i--){
        $factorial *= $i;
    }
    echo "Factorial: ={$factorial}";
?>