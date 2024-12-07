<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traffic Lights</title>
    <link rel="stylesheet" href="05_traffic_light.css">
</head>
<body>
    <form action="05_traffic_light.php" method="post">
        <label>Traffic Lights:</label>
        <input type="text" name="light"><br><br>
        <input type="submit" value="Indicate">
    </form><br>
</body>
</html>

<?php
    $light = $_POST["light"];

    switch ($light){
        case 'red':
            echo "Stop";
            break;
        case 'yellow':
            echo "Slow Down";
            break;
        case 'green':
            echo "Go";
            break;
    }
?>