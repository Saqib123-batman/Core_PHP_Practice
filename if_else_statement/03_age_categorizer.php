<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age_Categorizer</title>
</head>
<body>
    <form action="03_age_categorizer.php" method="post">
        <label>Age:</label>
        <input type="text" name="age"><br><br>
        <input type="submit" value="Check Age">
    </form><br><br>
</body>
</html>

<?php
    $age = $_POST["age"];

    if ($age >=0 && $age <=12){
        echo "Child";
    }
    elseif ($age >= 13 && $age <=20){
        echo "Teenager";
    }
    elseif ($age >=20 && $age <=59){
        echo "Adult";
    }
    elseif ($age >=60){
        echo "Senior Citizen";
    }
?>