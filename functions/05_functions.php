<!-- Even Odd in a string true and false -->

<?php

    function is_even($number){
        $result = $number % 2;

        if ($result == 0){
            
            return "TRUE";
        }
        else{
            return "FALSE";
        }
    }


    echo is_even(11)

?>