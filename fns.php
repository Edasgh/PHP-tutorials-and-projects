<?php
//functions in php => write some code one, reuse it when needed
// calling syntax same as js or c

//DECLARATION SYNTAX :
/*

function  function_name(parameter1,parameter2){
//code to be executed
}

*/

// calling syntax same as js or c
//call the function like : 
// function_name(parameter1,parameter2);

// its not compulsory for functions in php to have parameters like in js or c

function hbd($name, $age)
{
    echo "Happy Birthday to you,{$name} <br>";
    echo "You are {$age} years old! <br>";
}

// hbd("Eshita", 18);
// hbd("Thor", 29);

function isEven($num)
{
    if ($num % 2 == 0) {
        return "{$num} is even <br>";
    } else {
        return "{$num} is odd <br>";
    }
}

// $isEvenOrOdd = isEven(13);

// echo $isEvenOrOdd;

function hypotenuse(int $a, int $b)
{
    $c = sqrt($a ** 2 + $b ** 2);
    return $c;
}
//we can mention the parameter data type like in c to force the user to enter an argument/a parameter of that datatype
$hpt = hypotenuse(3, 4);

echo "The hypotenuse is = {$hpt}";
