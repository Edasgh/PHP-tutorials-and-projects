<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application of the fetch methods</title>
</head>
<body>
    <p>Product : Mushroom Pasta </p>
    <p>Price : 150.66rs</p>
     <form action="fetch.php" method="post">
        <label for="quantity">Enter The Quantity you want :</label>
        <br>
        <input type="number" name="quantity" id="quantity" required>
        <br>
        <br>
        <button type="submit">View Total</button>
        <br>
    </form>
</body>
</html>

<?php
$total=null;
$Item="Mushroom Pasta";
$price=150.66;
$quantity=$_POST["quantity"];
$total=$quantity * $price;
echo"<h2><br>The total price of {$quantity} packets of {$Item} is {$total}rs</h2>";
?>