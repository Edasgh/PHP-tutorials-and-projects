<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkboxes</title>
</head>
<body>
    <form action="./ch.php" method="post" >
        <label for="pizza">Pizza</label>
        <input type="checkbox" name="foods[]" id="pizza" value="Pizza">
        <br>
        <label for="pasta">Pasta</label>
        <input type="checkbox" name="foods[]" id="pasta" value="Pasta">
        <br>
        <label for="burger">Burger</label>
        <input type="checkbox" name="foods[]" id="burger" value="Burger">
        <br>
        <button type="submit" id="submit" name="order" value="order">Order Now</button>


    </form>
</body>
</html>

<?php
if(isset($_POST["order"]))
{
    $foods =null;

    if(isset($_POST["foods"]))
    {

        $foods=$_POST["foods"];
        
        foreach($foods as $food)
        {
            echo $food . "<br>";
        }
    }
    else
    {
        echo "Please select a food to order <br>";
    }
}
?>