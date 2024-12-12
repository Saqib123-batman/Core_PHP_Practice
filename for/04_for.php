<!-- Write a PHP program to calculate the sum of numbers from 1 to 100 using a for loop. -->

<?php
    $sum = null;

    for ($i=1; $i<=100; $i++){
        $sum += $i;
    }
    echo "Sum = ".$sum;
?>