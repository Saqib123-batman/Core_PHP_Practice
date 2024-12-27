<!-- Append Suffix to Words
Given the array:
Use a foreach loop to add the suffix "ing" to each word and display the updated array. -->


<?php
    
    $words = ["run", "jump", "swim"];


    foreach ($words as $word){
        $word .= "ing";
        echo $word."<br>";

    }
    

?>