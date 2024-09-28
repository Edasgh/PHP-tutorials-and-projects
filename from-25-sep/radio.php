<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio</title>
</head>

<body>
    <form action="./radio.php" method="post">
        <label for="visa">Visa</label>
        <input type="radio" name="credit_card" id="visa" value="Visa">
        <br>
        <label for="rupay">Rupay</label>
        <input type="radio" name="credit_card" id="rupay" value="RuPay">
        <br>
        <label for="mastercard">Mastercard</label>
        <input type="radio" name="credit_card" id="mastercard" value="MasterCard">
        <br>
        <button type="submit" name="confirm" value="confirm">Confirm</button>

    </form>
</body>

</html>

<?php

if (isset($_POST["confirm"])) {
    $credit_card = null;
    if (isset($_POST["credit_card"])) {
        $credit_card = $_POST["credit_card"];
      
    }

    switch($credit_card)
    {
        case "Visa" :
            echo "You selected Visa";
            break;
        case "RuPay":
            echo "You selected RuPay";
            break;
        case "MasterCard":
          echo "You selected MasterCard";
          break;
        default:
          echo "Please Select a Card";
    }
}

?>