<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>leap Year</title>
</head>
<body>
    <form action="04_leap_year.php" method="post">
        <label>Year:</label>
        <input type="text" name="year"><br><br>
        <input type="submit" value="Check the leap year">
    </form><br>
</body>
</html>


<?php
    $year = $_POST["year"];

    if ($year % 4 ==0 & $year % 100!=0 | $year % 400 == 0){
        echo "Leap Year: {$year}";
    }
    else {
        echo "Not a leap year: {$year}";
    }
?>