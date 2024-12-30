<!-- Default Parameter Value
Write a function named multiply that multiplies two numbers. The second parameter should have a default value of 2. -->


<?php

    function multiply($n1, $n2=2){

        return $n1 * $n2;
    }

    $num = multiply(5);
    echo $num;


?>