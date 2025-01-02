<?php
    // variable  name, age, height and output all three variables

    $name = "John";
    $age = 25;
    $height = 5.4;

    echo "Your name:{$name}<br>";
    echo "Your age:{$age}<br>";
    echo "Your Height:{$height} foot";
    echo "<br>";
    echo "----------<br>"

?>



<?php
    // changing variable values
    $num = 50;
    echo $num."<br>";
    $num = 100;
    echo $num."<br>";
    echo "----------<br>"

?>


<?php
    // data type identification
    $x = "Hello Saqib";
    $y = 25;
    $z = true;

    echo gettype($x)."<br>";
    echo gettype($y)."<br>";
    echo gettype($z)."<br>";
    echo "----------<br>"
?>

<?php
    // type conversion
    $number = "123abc";
    $number = (integer) $number;
    echo gettype($number)."<br>";
    echo "----------<br>"
?>

<?php
    // string interpolation with variable
    $name = "John";
    $age = 25;

    echo "My name is {$name}, and I am {$age} years old.<br>";
    echo "----------<br>"

?>


<?php
    // arrays as data type print the 2nd color of this array
    $colors = ["Blue", "Black", "Red"];
    echo $colors[1]."<br>";
    echo "----------<br>"
       
?>