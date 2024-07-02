<?php
//logical operators in php
// same as in other languages like js,c

$temp = 23;
$cloudy = false;

if ($temp > 0 && $temp < 60) {
    echo "<br>The weather is so nice today!<br>";
} else {
    echo "<br>The weather is horrible today<br>";
}

if ($temp < 0 || $temp > 34) {
    echo "<br>The weather is bad.<br>";
} else {
    echo "<br>The weather is so nice today!<br>";
}


if (!$cloudy) { //!$cloudy (! = not of operator) 
    echo "<br>It's sunny!<br>";
} else {
    echo "<br>It's cloudy!<br>";
}



// $age = 20;
// $citizen = true;

// if ($age >= 18 && $citizen) {
//     echo "You're eligible for vote! <br>";
// } else {
//     echo "Sorry! you're not eligible. <br>";
// }
