<!-- Sum of Numbers
Write a do-while loop to find the sum of numbers from 1 to a given positive integer (use a user input for the integer). -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum_of_numbers</title>
</head>
<body>
    <form action="02_sum_of_numbers.php" method="post">
        <label>Enter Number:</label>
        <input type="text" name="number"><br><br>
        <input type="submit" value="Count_Sum">
    </form><br>
</body>
</html>

<?php
    $num = $_POST["number"];
    $i = 1;
    $sum = null;

    do {

        $sum += $i;
        $i++;
    } while ($i < $num);
    echo "Sum = {$sum}";

?>