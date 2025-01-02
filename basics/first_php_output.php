<!-- PHP output exercises -->
<?php
    echo "Hello saqib ", 123, " multiple arguments<br>";
    echo "Hello ghee<br>";
    echo "WELCOME BACK :)";
    echo "<br>";
?>


<?php
    // Concatenate the string variables using . operator

    $greeting = "Good";
    $time = "Morning";

    echo $greeting." ".$time;
    echo "<br>";

?>


<?php
    // variable interpolation
    $sentence = "PHP is a server-side scripting language.";
    echo $sentence;
    echo "<br>";
?>


<?php
    // arithmetic output sun and difference 
    $a = 10;
    $b = 5;

    echo $a+$b."<br>";
    echo $a-$b;
    echo "<br>";
?>


<?php
    // html code in php
    echo "<h1>Welcome to My Blog<h1>";
    echo "<p>This is a paragraph.<p>";
    
?>


<?php
    $day = "Monday";
    echo "Today is {$day}";
    echo "<br>";
?>


<?php
    // using escape character
    // He said, "PHP is awesome!"

    echo "He said, \"PHP is awesome!\"";
    echo "<br>";
?>



<?php
    // length calculation of a string
    $text = "Learn PHP";
    echo strlen($text);
    echo "<br>";

?>


<?php
    // formatted string 
    $name = "John";
    $age = 25;
    echo "{$name} is {$age} years old"
?>