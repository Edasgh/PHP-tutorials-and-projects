<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working with Radio Buttons</title>
</head>

<body>
    <form action="./radio_btn.php" method="post">
        <h3>Select a Credit Card</h3>
        <input type="radio" name="cr-card" id="visa" value="Visa">
        <label for="visa">Visa</label>
        <br>
        <input type="radio" name="cr-card" id="rupay" value="Rupay">
        <label for="rupay">Rupay</label>
        <br>
        <input type="radio" name="cr-card" id="mcard" value="MasterCard">
        <label for="mcard">MasterCard</label>
        <br>
        <br>
        <button type="submit" name="submit" value="selected">Proceed to Pay</button>
        <br>
        <br>

    </form>
</body>

</html>

<?php
if (isset($_POST["submit"])) {

    $credit_card = null;

    if (isset($_POST["cr-card"])) {

        $credit_card = $_POST["cr-card"];
    }

    switch ($credit_card) {
        case "Visa":
            echo "You've chosen Visa  <br>";
            break;
        case "Rupay":
            echo "You've chosen Rupay  <br>";
            break;
        case "MasterCard":
            echo "You've chosen MasterCard <br>";
            break;
        default:
            echo "Please select a credit card! <br>";
    }
}


?>