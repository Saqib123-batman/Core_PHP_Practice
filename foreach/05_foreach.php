<!-- Count String Lengths
Write a PHP program to display each word and its length using a foreach loop. -->

<?php
    $words = ["apple", "banana", "grape", "orange"];

    foreach($words as $value){
        echo $value." ".strlen($value)."<br>";
    }

?>