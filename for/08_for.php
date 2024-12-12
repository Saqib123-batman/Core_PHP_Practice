<!-- Write a PHP program to print the following pattern using a for loop:
****
***
**
* -->

<?php
    for($i=1; $i<=4; $i++){
        for($j=4; $j>=$i; $j--){
            echo "*";
        }
        echo "<br>";
    }
?>