<!-- Create a function named isPrime that checks whether a number is prime and returns true or false. -->

<?php

    function primeCheck($number){

        for ($i=2; $i <= $number/2; $i++){
            if ($number % $i == 0)
            return "FALSE";
        }
        return "TRUE";
    }

    echo primeCheck(9);
?>