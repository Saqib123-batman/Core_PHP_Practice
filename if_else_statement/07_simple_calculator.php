<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="07_simple_calculator.css">
</head>
<body>
    <form action="07_simple_calculator.php" method="post">
        <label>Num_one:</label>
        <input type="number" name="number1"><br><br>
        <label>Num_two</label>
        <input type="number" name="number2"><br><br>
        <label>Operations: +, -, *, /</label>
        <input type="text" name="operation">
        <input type="submit" value="Calculate">

    </form><br><br>
</body>
</html>

<?php
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];
    $operation = $_POST["operation"];

    if ($operation == "+"){
        $addition = $number1 + $number2;
        echo $addition;
    }
    elseif($operation == "-"){
        $subtraction = $number1 - $number2;
        echo $subtraction;
    }
    elseif ($operation == "*"){
        $multiplication = $number1 * $number2;
        echo $multiplication;
    }
    elseif ($operation == "/"){
        $division = $number1 / $number2;
        echo $division;
    }
    else{
        echo "Error";
    }
?>