<!-- Define a function named getFullName that accepts first and last names as parameters and returns the full name. -->


<?php

    function getFullName($first,$last){

        return "$first $last";
    }

     $full_name = getFullName("Saqib","Uzair");
     
     echo $full_name;
?>