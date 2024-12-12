<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count Down</title>
</head>
<body>
    <form action="06_for.php" method="post">
        <label>Enter to count down</label>
        <input type="text" name="down">
        <input type="submit" value="Start">
    </form><br>
</body>
</html>

<?php
    $count_down = $_POST["down"];

    for ($i=$count_down; $i > 0; $i--){
        echo $i."<br>";
    }
?>