<?php

//array => special type of variable which contains multiple values
// an arry inphp can hold an integer or a float or a boolean value and a string at the same time

//$foods is an array | array syntax in php
$foods = array("apple", "orange", "banana", "coconut");

//syntax to change any element in an array | have to know the index and the change like this :
// $array_name[index]=value at index;
// $foods[0] = "stawberry";


//push an element in array | add an element after the last element of that array
// use array_push function
// Syntax : array_push($arrayName,element to push)


array_push($foods, "blueberry", "Mango", "Lichi", 2);
//we can push one or more elements to an array (add after the last element of that array)

//remove an element from the last : array_pop($arrayName)
//remove the first element of an array : array_shift($arrayName)


// array_pop($foods);
// array_shift($foods);



//$revArr = array_reverse($arrayName) to reverse an array
//array_reverse() function returns the reversed array


$reversedArr = array_reverse($foods);

$foods_size = count($foods);

echo "The size of foods array is $foods_size" . "<br>";

//foreach syntax in php
// foreach ($reversedArr as $food) {
//     //taking each element as $food here
//     echo $food . "<br>";
// }


// for ($i = 0; $i < $foods_size; $i++) {
//     echo "The element at $i is : " . $foods[$i] . "<br>";
// }

array_push($foods, "Pineapple", "Qiwi");

$reversedFoods = array_reverse($foods);

$foods = $reversedFoods;

foreach ($foods as $food) {
    echo $food . "<br>";
}
