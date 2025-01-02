<?php
    // Area of a circle

    $area = NULL;
    $pi = 3.142;
    $radius = 4;
    $area = $pi*pow($radius, 2);

    echo "Area of a circle:={$area}<br>";
    echo "___________<br>"

?>


<?php
    // swap variable without the 3rd variable
    $num1 = 5;
    $num2 = 10;

    echo "Before swapping:<br>";
    echo "num1={$num1}<br>";
    echo "num2={$num2}<br>";
    echo "<br>";

    // now swapping

    $num1 = $num1 + $num2;
    $num2 = $num1 - $num2;
    $num1 = $num1 - $num2;

    echo "After Swapping:<br>";
    echo "num1={$num1}<br>";
    echo "num2={$num2}<br>";
    
    echo "___________<br><br>"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversion </title>
</head>
<body>
    <form action="02_arithmetic_operators.php" method="get">
        <label for="number">Minutes:</label><br>
        <input type="text" name="number">
        <input type="submit" value="Result">
    </form>
<?php
    // converts a given number of minutes into hours and minutes (e.g., 130 minutes = 2 hours, 10 minutes).
    $minutes = $_GET["number"];
    $hours = floor($minutes/60);
    $remaining_minutes = $minutes%60;


    echo $hours." hours,";
    echo $remaining_minutes." minutes <br>";
    echo "___________<br><br>"
?>
</body>
</html>


<?php
    // Operator precedence 
    $total = 1 + 2 - 3 * 4 / 5 ** 6;
    echo "Total:={$total}"."<br>";
    echo "___________<br><br>"
?>