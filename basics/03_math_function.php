<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Functions</title>
</head>
<body>
    <form action="03_math_function.php" method="post">
        <label>X:</label>
        <input type="text" name="x"><br><br>
        <label>Y:</label>
        <input type="text" name="y"><br><br>
        <label>Z:</label>
        <input type="text" name="z"><br><br>
        <input type="submit" value="Result">

    </form>
</body>
</html>

<?php
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    // $z = $x*$y;
    // $z = $x - $y;
    // $z = $x + $y;
    // $z = $x / $y;
    // $z = ($x+$y) * $x + $y/$x;

    // $total = abs($x);
    // $total = round($y);
    // $total = floor($x);
    // $total = ceil($x);
    // $total = pow($x, $y);
    // $total = max($x, $y, $z);
    // $total = min($x, $y, $z);
    // $total = pi();
    $total = rand(1,6);

    echo $total;
?>