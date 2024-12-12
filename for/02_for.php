<!-- Write a program to print the even numbers between 1 and 20. -->

<?php
    echo "Even Numbers<br>";
    
    for ($i=1; $i<=20; $i++){
        if ($i%2 == 0){
            echo $i."<br>";
        }
    }
?>