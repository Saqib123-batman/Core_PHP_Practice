<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grading system</title>
</head>
<body>
    <form action="03_grading_system.php" method="post">
        <label for="grade">Letter:</label>
        <input type="text" name="grade"><br><br>
        <input type="submit" value="Grade">
    </form><br>
</body>
</html>

<?php
    $grade = $_POST["grade"];

    switch ($grade){
        case 'A':
            echo "Excellent";
            break;
        case 'B':
            echo "Good";
            break;
        case 'C':
            echo "Average";
            break;
        case 'D':
            echo "Poor";
            break;
        case 'F':
            echo "Fail";
            break;
    }

?>