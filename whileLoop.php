<?php

//while loop => do some code infinitely while some condition remains true

$count = 0;
//isset($_POST["name"]) : the isset function is used to see if a variable has been set or not
//here if the value of the input having name = "name" has been submitted via post or not or whether it has any value or not

while ($count < 10) {
    $count++;
    echo $count . "<br>";
}
