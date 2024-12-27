<!-- Calculate Sum of Numbers
Given an array of numbers: -->


<?php
    $numbers = [10, 20, 30, 40, 50];
    $sum = null;

    foreach ($numbers as $element){
        $sum += $element;
    }

    echo $sum;


?>