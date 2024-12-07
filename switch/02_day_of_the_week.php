<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>day of the week</title>
</head>
<body>
    <form action="02_day_of_the_week.php" method="post">
        <label for="week">Week Day:</label>
        <input type="text" name="day"><br><br>
        <input type="submit" value="Day_Name">
    </form><br>
    <?php
        $day = $_POST["day"];

        switch ($day){
            case 1:
                echo "Monday";
                break;
            case 2:
                echo "Tuesday";
                break;
            case 3:
                echo "Wednesday";
                break;
            case 4:
                echo "Thursday";
                break;
            case 5:
                echo "Friday";
                break;
            case 6:
                echo "Saturday";
                break;
            case 7:
                echo "Sunday";
                break;
        }
    ?>
</body>
</html>
