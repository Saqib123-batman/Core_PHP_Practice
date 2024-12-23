<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guessing number</title>
    <link rel="stylesheet" href="06_style.css">
</head>
<body>
    <form action="06_guessing.php" method="post">
        <label>Guess Number:</label>
        <input type="text" name="guess">
        <input type="submit" value="Guess">
    </form>
    <div class="output">
    <?php
    $guess =  $_POST["guess"];
    $secret = 25;
    $i = 1;

    do {
        if ($guess == $secret){
            echo "You Guess the secret number:";
            break;
        }
        else{
        
        }
        $i++;
    }while($i<=100);

?>
    </div>
</body>
</html>