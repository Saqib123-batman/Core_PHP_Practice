<!-- Create a function named isEven that takes an integer parameter and checks if it is even. -->


<?php

    function isEven($number){

        if ($number %2 ==0){
            echo "$number is Even";
        }
        else{

            echo "$number is Odd";
        }
    }

    isEven(50);
?>