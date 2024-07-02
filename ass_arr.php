<?php
//Associative array = just like js object
// stores data in key value pair method
// An array made of key value pairs


// key => value syntax for each element

$capitals = array(
    "India" => "New Delhi",
    "USA" => "Washinton D.C.",
    "South Korea" => "Seuol",
    "Japan" => "Kyoto"
);


//to view an element : arrayName[key];
// $capitals["India"] = "Kolkata";
// echo $capitals["India"];

//shift, pop same methods 
// the push method won't work here

// $keys = array_keys($capitals);
// $values = array_values($capitals);



$arrSize = count($capitals);
echo "The length of the capitals array is $arrSize <br> <Br>";



// foreach ($keys as $key) {
//     echo "The country {$key} <br>";
// }

// foreach ($values as  $value) {
//     echo "The capital  {$value} <br>";
// }

//to flip the keys with the values
// $capitals = array_flip($capitals);

//same : to reverse the array | to reverse the order of key-value pairs
// $capitals = array_reverse($capitals);

foreach ($capitals as $key => $value) {
    echo "The capital of {$key} is {$value} <br>";
    // echo "{$key} <= {$value} <br>";
}
