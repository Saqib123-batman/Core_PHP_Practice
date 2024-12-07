<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
    <link rel="stylesheet" href="04_calculator.css">
</head>
<body>
    <form action="04_calculator.php" method="post">
        <label for="num1">Number1:</label>
        <input type="text" name="num1"><br><br>
        <label for="num2">Number2</label>
        <input type="text" name="num2"><br><br>
        <label for="operator">Opeartor</label>
        <input type="text" name="operators"><br><br>
        <input type="submit" value="Calculate">
    </form><br>
</body>
</html>

<?php
    $number1 = $_POST["num1"];
    $number2 = $_POST["num2"];
    $operator = $_POST["operators"];
    $result = null;


    switch ($operator){
        case '+':
            $result = $number1 + $number2;
            echo $result;
            break;
        case '-':
            $result = $number1 - $number2;
            echo $result;
            break;
        case '*':
            $result = $number1 * $number2;
            echo $result;
            break;
        case '/':
            $result = $number1 / $number2;
            echo $result;
            break;
    }
?>