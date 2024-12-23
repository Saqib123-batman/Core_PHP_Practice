<!-- Even Numbers
Write a do-while loop that prints all even numbers between 1 and 20. -->

<?php
     $i = 1;
     
     do {
        if ($i % 2 ==0){
            echo $i."<br>";
        }
        $i++;
     }while ($i <= 20);
?>