<?php
// server : localhost/website/variable.php

//variable in php -> a reusable container that holds data
// string, integer,float,boolean

$variable = "This is a variable";
$favFood = "Pasta";

//integers
$age = 19;

$users = 3;


//floats
$cgpa = 9.5;
$price = 90.5;
$tax_rate = 4.1;

//booleans

$isAdmin = true;
$isNowMorning = false;


echo "Hi! Welcome to variable <br>";
echo "Hello {$variable} <br>";
echo "My favourite food is {$favFood} <br>";

echo "I'm {$age} years old <br>";
echo "{$users} users are online right now! <br>";

echo "My cgpa is {$cgpa} <br>";

echo "This packet of {$favFood} is worth : \${$price}<br>";
// to display dollar sign, write '\$' not '$'

echo "The tax rate is now {$tax_rate}%" . "<br>";

echo "Your admin status is {$isAdmin} <br>";

echo "Now is it morning ? {$isNowMorning} <br>";
//if the value is true, then it displays 1 otherwise(if value is false), it displays nothing
