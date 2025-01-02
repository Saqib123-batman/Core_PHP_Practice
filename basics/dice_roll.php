<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Dice roll Game:</title>
    <link rel="stylesheet" href="dice_roll.css">
</head>
<body>
<div class="container">
    <h1>Dice Roll Game</h1>
    <p>If you roll a dice and get the 6 you will win the game:</p>
    <?php
        $dice = rand(1,6);
        echo $dice."<br>";
        if ($dice == 6){
            echo "<p class='winner'>Congratulations! You won the game!</p>";
        } else {
            echo "<p class='loser'>Better luck next time!</p>";
        }
    ?>
</div>

</body>
</html>