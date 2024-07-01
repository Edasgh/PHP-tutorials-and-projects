<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="switches.php" method="post">
        <!-- for down counting -->
        <label for="num">Enter a number to count from:</label>
        <input type="number" name="num" id="num">
        <br>
        <br>
        <button type="submit">Count</button>
        <!-- for up counting -->
        <!-- <label for="num">Enter a number to count to:</label>
        <input type="number" name="num" id="num">
        <br>
        <br>
        <button type="submit">Count</button> -->
    </form>

</body>

</html>


<?php
//switch-case in php have same syntax as js or c

// $grade = "A";

// switch ($grade) {
//     case "A":
//         echo "You did great<br>";
//         break;
//     case "B":
//         echo "You did good<br>";
//         break;
//     case "C":
//         echo "You did okay<br>";
//         break;
//     case "D":
//         echo "You did poorly<br>";
//         break;
//     case "F":
//         echo "You failed!<br>";
//         break;
//     default:
//         echo "{$grade} is not a valid grade!";
// }


// $date = date("l");

// switch ($date) {
//     case "Monday":
//         echo "Shit! It's monday again";
//         break;
//     case "Tuesday":
//         echo "Hello,today is {$date}  and Sunday is 5 days more to go!";
//         break;
//     case "Wednesday":
//         echo "Hello ,today is {$date} and Sunday is 4 days more to go!";
//         break;
//     case "Thursday":
//         echo "Hello,today is {$date}  and Sunday is 3 days more to go!";
//         break;
//     case "Friday":
//         echo "Hello,today is {$date}  and Sunday is 2 days more to go!";
//         break;
//     case "Saturday":
//         echo "Hello,today is {$date} and Sunday is tomorrow!";
//         break;
//     case "Sunday":
//         echo "Hello and today is Sunday!";
//         break;
// }


//for loop in php has same syntax as js or c

$count = $_POST["num"];

for ($i = $count; $i > 0; $i--) {
    // for ($i = 1; $i <= $count; $i++) {
    echo $i . "<br>"; //will print from 4 to 0
    // echo $i . "<br>"; //will print from 0 to 4

}
