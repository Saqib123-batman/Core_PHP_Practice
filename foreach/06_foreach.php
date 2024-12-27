<!-- Filter Even Numbers
Given an array:
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
Use a foreach loop to print only the even numbers from the array. -->



<?php
    $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    foreach ($numbers as $even){
        
        if ($even % 2 ==0){
            echo $even."<br>";
        }
    }

?>