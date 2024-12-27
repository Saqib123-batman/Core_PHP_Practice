<!-- largest elements in the array  -->

<?php

    echo "foreach loop :) <br>";

    $arr = array (25,43,55,65,79,27);
    $max = $arr[0];

    foreach($arr as $value){
        if($value > $max){
            $max = $value;
        }
    }

    echo $max;

?>