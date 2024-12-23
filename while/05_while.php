<!-- Sum of Even Numbers
Calculate the sum of all even numbers between 1 and 50 using a while loop. -->

<?php
    $i = 1;
    $sum = 0;

    while ($i <=50){
        $sum += $i;
        $i ++;
    }
    echo "Sum:={$sum}";
?>