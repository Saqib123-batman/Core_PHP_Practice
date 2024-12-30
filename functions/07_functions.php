<!-- sum numbers of 1 to 10 -->

<?php
    
    function sumNumbers(){

        $sum = 0;
        for ($i = 1; $i<11; $i++){
            
            $sum += $i;
        }
        echo $sum;
    }

    sumNumbers();

?>