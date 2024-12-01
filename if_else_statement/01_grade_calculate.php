<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade_Calculator</title>
</head>
<body>
    <form action="01_grade_calculate.php" method="post">
        <label for="score">Enter your score:</label>
        <input type="text" name="score"><br><br>
        <input type="submit" value="Check Grade">
    </form><br>
</body>
</html>

<?php
    $score = $_POST["score"];

    if($score >= 90 && $score <= 100){
        echo "A Grade:";
    }
    elseif ($score >= 80 && $score <=89){
        echo "B Grade:";
    }
    elseif ($score >=70 && $score <= 79){
        echo "C Grade:";
    }
    elseif ($score >= 60 && $score <= 69){
        echo "D Grade:";
    }
    elseif ($score <60){
        echo "Fail";
    }

?>