<!-- Factorial of a Number -->
<!-- Write a script to calculate the factorial of a number (e.g., 5) using a while loop. -->

<?php
    $num = 5;
    $count_fact = 1;

    while ($num > 0){
        $count_fact *= $num;
        $num --;
    }
    echo $count_fact;
?>