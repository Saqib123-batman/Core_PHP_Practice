<!-- Write a function named findFactorial that calculates and returns the factorial of a given number. -->

<?php
    
    function findFactorial($number){

        $factorial = 1;

        if ($number == 0 || $number == 1){
            return "Factorial=$factorial";
        }
        else{
            for ($i=$number; $i > 0; $i--){
                $factorial = $factorial * $i;
            }
            return "Factorial=$factorial";
        }

    }
    echo findFactorial(5);
    
?>