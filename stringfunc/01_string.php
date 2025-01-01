<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
</head>
<body>
    <form action="01_string.php" method="post">
        <label>Enter text:</label>
        <input type="text" name="string">
        <input type="submit" value="Go!">
    </form><br>
</body>
</html>

<?php
    $string = $_POST["string"];
    
    for($i=0; $i < strlen($string); $i++){
        echo $string[$i]."<br>";
    }
?>