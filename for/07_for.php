<!-- Write a PHP program to print the following pattern using a for loop:
*
**
***
****
***** -->

<?php
    
    for ($i=1; $i<=5; $i++){
        for ($j=1; $j<=$i; $j++){
            echo "*";
        }
        echo "<br>";
    
    }

?>