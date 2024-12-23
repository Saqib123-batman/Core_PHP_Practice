<!-- Factorial of a Number
Write a do-while loop to compute the factorial of a number provided by the user. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <form action="05_factorial.php" method="post">
        <label>Enter number:</label>
        <input type="text" name="number"><br><br>
        <input type="submit" value="Count">
    </form><br><br>
</body>
</html>


<?php
    $i = $_POST["number"];
    $factorial = 1;

    do{
        $factorial *= $i;
        $i --;
    }while ($i>0);

    echo "Factorial:={$factorial}";

?>