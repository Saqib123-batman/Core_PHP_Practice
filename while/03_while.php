<!-- Sum of Numbers -->
<!-- Write a PHP program to find the sum of the first 10 natural numbers using a while loop. -->

<?php
    $sum = 0 ;
    $i = 1;

    while ($i <= 10){
        $sum += $i;
        $i++;
    }
    echo "Sum of natural numbers:={$sum}";
?>