<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check eligibility</title>
</head>

<body>
    <!-- <form action="ifElse.php" method="post">
        <label for="hours">Enter how many hours you have worked :</label>
        <input type="number" name="hours" id="hours" required>
        <br>
        <br>
        <button type="submit">Submit</button>
    </form> -->
    <form action="ifElse.php" method="post">
        <label for="age">Enter Your Age</label>
        <input type="number" name="age1" id="age2" required>
        <br>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>

<?php
//if-else conditional in php
//same syntax as js, c 
$age = $_POST["age1"]; //takes name as argument to search the value



if ($age >= 18) {
    echo "<br>You are {$age} years old.<br>";
    echo "<br>You're eligible for vote<br>";
} elseif ($age <= 0) {
    echo "<br>Invalid Age :( <br>";
} else {
    echo "<br>You are {$age} years old.<br>";
    echo "<br>You must have to be atleast 18 years old to vote<br>";
}

// if ($age == 0) {
//     echo "<br>S'up toddler!";
// } else {
//     echo "<br>Hi bro!";
// }

// $hours = $_POST["hours"];
// $pay_rate = 15;
// $weekly_pay = null;

// if ($hours >= 40) {
//     $weekly_pay = $hours * $pay_rate;
//     echo "<br>You made \${$weekly_pay} this week<br>";
// } elseif ($hours < 0) {
//     echo "<br>Invalid hour input<br>";
// } else {
//     echo "<br>You didn't work overtime this year<br>";
// }




?>