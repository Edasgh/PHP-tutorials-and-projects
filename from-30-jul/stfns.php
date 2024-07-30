<?php
//String functions in php
$username = "Chris Evans";
// strtolower converts a string to lowercase
// $username = strtolower($username);

//Converts a string to uppercase
// $username = strtoupper($username);

//trim removes extra whitespaces
// $username = trim($username);

// $username = str_pad($username, 20, "w");
// 20 characters after username will be filled with the character : "w"
// echo $username;

// $date = "27-08-23";

// $date = str_replace("-", "/", $date);

// string reverse function
//$username = strrev($username); //resU

//string shuffle : shuffle the characters in a string
// $username = str_shuffle($username);


//string compare -> if two strings are the same then it returns 0 if not same then it returns 1 or -1

// $comp = strcmp($username, "");

//length of a string
// $count = strlen($username);

//finds index of a character in a string
// $pos = strpos($username, "r");

//substring from a string
// substr(string,starting_index,ending_index)
// from index-0 to index-1
// $frst = substr($username, 0, 2);

//explode(separator,string) --> returns an array of the portions separated by the separator mentioned here
$fullname = explode(" ", $username);

// foreach ($fullname as $name) {
//     echo $name . "<br>";
// }

//implode(separator,array) --> creates string from an array an separates the elements by the separator
// $n = implode("-", $fullname);
$n = implode(" ", $fullname);

echo $n;

// echo "{$username}";
// echo "{$username}  {$date}  length={$count}";
