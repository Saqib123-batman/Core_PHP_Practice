<!-- Create a function that counts the number of vowels in a string. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vowel Count Game</title>
    <link rel="stylesheet" href="02_string.css">
</head>
<body>
    <form action="02_string.php" method="post">
        <label>Write Your String:</label>
        <input type="text" name="str"><br><br>
        <input type="submit" value="Count Vowel">
    </form><br><br>
</body>
</html>

<?php
    $str = $_POST["str"];
    function vowel_count($str){
        
        $counter = 0;

        for ($i = 0; $i<strlen($str); $i++){

            if ($str[$i]== "a" || $str[$i]=="e" || $str[$i]=="i" || $str[$i]=="o" || $str[$i]=="u"){
                $counter += 1;
            }
        }

        return "<b>There are $counter Vowel in this string";
    }


    $count = vowel_count($str);
    echo $count;

?>