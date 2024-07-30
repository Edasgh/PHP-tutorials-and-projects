<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheckBoxes</title>
</head>

<body>
    <form action="./checkBoxes.php" method="post">
        <!-- If we put an array like this in name then we store the values (if submitted) in that array -->
        <input type="checkbox" name="foods[]" id="pz" value="Pizza">
        <label for="pz">Pizza</label>
        <br>
        <input type="checkbox" name="foods[]" id="hbg" value="Hamburger">
        <label for="hbg">Hamburger</label>
        <br>
        <input type="checkbox" name="foods[]" id="hd" value="Hotdog">
        <label for="hd">Hotdog</label>
        <br>
        <input type="checkbox" name="foods[]" id="taco" value="Taco">
        <label for="taco">Taco</label>
        <br>
        <br>
        <button type="submit" name="submit" value="submit">Place Order</button>
        <br><br>
    </form>
    <!-- <form action="./checkBoxes.php" method="post">
        <input type="checkbox" name="Pizza" id="pz">
        <label for="pz">Pizza</label>
        <br>
        <input type="checkbox" name="Hamburger" id="hbg">
        <label for="hbg">Hamburger</label>
        <br>
        <input type="checkbox" name="Hotdog" id="hd">
        <label for="hd">Hotdog</label>
        <br>
        <input type="checkbox" name="Taco" id="taco">
        <label for="taco">Taco</label>
        <br>
        <br>
        <button type="submit" name="submit" value="submit">Place Order</button>
        <br><br>
    </form> -->
</body>

</html>

<?php

if (isset($_POST["submit"])) {



    $foods = null;
    if (isset($_POST["foods"])) {
        $foods = $_POST["foods"];
        echo "You chose  : <br> ";
        foreach ($foods as $food) {
            echo $food . "<br>";
        }
    } else {
        echo "Please select a food from the option!<br>";
    }





    // if (isset($_POST["Pizza"])) {
    //     echo "You like Pizzas!<br>";
    // }
    // if (isset($_POST["Hamburger"])) {
    //     echo "You like Hamburgers!<br>";
    // }
    // if (isset($_POST["Hotdog"])) {
    //     echo "You like Hotdogs!<br>";
    // }
    // if (isset($_POST["Taco"])) {
    //     echo "You like Tacos!<br>";
    // }


    // if (empty($_POST["Pizza"])) {
    //     echo "You DON'T like Pizzas!<br>";
    // }
    // if (empty($_POST["Hamburger"])) {
    //     echo "You DON'T like Hamburgers!<br>";
    // }
    // if (empty($_POST["Hotdog"])) {
    //     echo "You DON'T like Hotdogs!<br>";
    // }
    // if (empty($_POST["Taco"])) {
    //     echo "You DON'T like Tacos!<br>";
    // }
}



?>