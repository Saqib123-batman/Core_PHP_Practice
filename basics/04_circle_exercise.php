<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circle Exercise</title>
</head>
<body>
    <form action="04_circle_exercise.php" method="post">
        <label>Radius:</label>
        <input type="text" name="radius"><br><br>
        <input type="submit" value="Calculate">
    </form><br><br>
</body>
</html>

<?php
    $radius = $_POST["radius"];
    $circumference = null;
    $area = null;
    $volume = null;

    $circumference = 2 * pi() * $radius;
    $circumference = round($circumference, 2);

    $area = pi() * pow($radius, 2);
    $area = round($area, 2);

    $volume = 4/3 * pi() * pow($radius, 3);
    $volume = round($volume,2);

    echo "Circumference: {$circumference} cm <br><br>";
    echo "Area: {$area} cm <br><br>";
    echo "Volume: {$volume} cm<br><br>";

?>