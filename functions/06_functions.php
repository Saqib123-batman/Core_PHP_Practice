<!-- Create a function named displayDate that displays the current date. -->

<?php
    function displayDate(){

        $today = date("d/m/Y");
        echo $today;
    }


    displayDate();

?>