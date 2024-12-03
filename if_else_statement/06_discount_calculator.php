<!-- Discount Calculator

Create a script that calculates a discount based on the purchase amount:

    Less than $50: No discount.
    $50-$100: 10% discount.
    Above $100: 20% discount.

Input the purchase amount and display the discount and final amount. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discount_Calculator</title>
    <link rel="stylesheet" href="06_discount_calculator.css">
</head>
<body>
    <form action="06_discount_calculator.php" method="get">
        <label>Amount:</label>
        <input type="text" name="amount"><br><br>
        <input type="submit" value="Check Discount">
    </form><br>
</body>
</html>

<?php
    $amount = $_GET["amount"];
    $final_amount = null;
    $discount = null;

    if ($amount<50){
        $final_amount = $amount;
        echo "Final Amount: \${$final_amount}<br>";
        echo "Discount: $0";
    }
    elseif($amount >= 50 && $amount <= 100){
        $discount = $amount/10;
        $final_amount = $amount - $discount;
        echo "Discount: \${$discount}<br>";
        echo "Final Amount: \${$final_amount}<br>";
    }
    elseif($amount > 100){
        $discount = $amount/20;
        $final_amount = $amount - $discount;
        echo "Discount: \${$discount}<br>";
        echo "Final Amount: \${$final_amount}<br>";
    }

?>