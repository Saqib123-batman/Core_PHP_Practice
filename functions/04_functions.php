<!-- Using return and Conditions
Write a function isEven that takes an integer $number as input and returns true if the number is even, otherwise returns false. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isEven</title>
</head>
<body>
    <form action="04_functions.php" method="post">
        <label>Number:</label>
        <input type="text" name="number">
        <input type="submit" value="Check">
    </form><br>
</body>
</html>



<?php
    $number = $_POST["number"];

    function isEven($number){

        if ($number % 2 ==0){
            return true;
        }
        else{
            return false;
        }
    }

    $check = isEven($number);

    echo $check;

?>