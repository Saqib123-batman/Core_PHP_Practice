<!-- Write a function named findMaximum that accepts two numbers as parameters and prints the larger number. -->

<?php

    function findMaximum($num1, $num2){
        if  ($num1 > $num2){
            echo "$num1 is greater than $num2";
        }
        else{
            echo "$num2 is greater than $num1";
        }
    }

    findMaximum(10,5);
?>

