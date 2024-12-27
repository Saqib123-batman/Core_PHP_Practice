<!-- Display Key-Value Pairs
You have the following associative array:
Write a PHP program to display each student's name along with their score. -->

<?php
    $students = ["Alice" => 85, "Bob" => 78, "Charlie" => 92];


    foreach ($students as $key => $element){
        echo $key." ".$element."<br>";
    }

?>