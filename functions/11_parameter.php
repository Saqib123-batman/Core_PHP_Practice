<!-- Create a function named calculateArea that accepts length and width as parameters and calculates the area of a rectangle. -->

<?php

    function calculateArea($length, $width){

        $area = $length * $width;
        echo $area;
    }


    calculateArea(5,5);
?>