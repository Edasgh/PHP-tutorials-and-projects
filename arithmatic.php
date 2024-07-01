<?php
$favFood="Pasta";
$price=90.5;
$quantity=4;

$total=null;

//echo"I ordered {$quantity} X {$favFood}s <br>";

// $total=$quantity * $price;

//echo"The total price is \${$total}";

//Arithmatic Operators *, +, -, /, %, ** 

// $x=20;
// $y=12;
// $z=null;

//$z=$x+$y;
// $z=$x-$y;
// $z=$x*$y;
// $z=$x/$y;

//** => to the power operator

// $z=2**3;

// $z=$x%$y; //8

// echo $z;


//Increment Operator ++ , Decrement Operator -- 

$count=0;

// $count++;
// echo "count = {$count} <br>";


// $count++;
// echo "count = {$count} <br>";

// $count--;
// echo "count = {$count} <br>";


// $count--;
// echo "count = {$count} <br>";


$count+=2; //increment by 2
echo "count = {$count} <br>";


$count+=2;
echo "count = {$count} <br>";



//Operator Predence | Priority Orders of Operators
/*
()
**
* / % 
+ -
*/


$num=1+2-3*4/5**6;
//12/5 to the power 6 = 12/15625
//3-0.000768 = 2.999232
echo $num;

?>