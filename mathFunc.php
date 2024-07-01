<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Functions in Php</title>
</head>
<body>
    <h2>Calculate Circumference and area of a circle </h2>
   <form action="mathFunc.php" method="post">
        <label for="radius">Enter Radius :</label>
        <input type="text" name="radius" id="radius" required>
        <br>
        <br>
        <button type="submit">View Total</button>
        <br>
    </form>  
   <!-- <form action="mathFunc.php" method="post">
        <label for="num1">Enter a number :</label>
        <br>
        <input type="text" name="num1" id="num1" required>
        <br>
        <br>
        <label for="num2">Enter a number :</label>
        <br>
        <input type="text" name="num2" id="num2" required>
        <br>
        <br>
        <label for="num3">Enter a number :</label>
        <br>
        <input type="text" name="num3" id="num3" required>
        <br>
        <br>
        <button type="submit">View Total</button>
        <br>
    </form>   -->
</body>
</html>

<?php
// $x=$_POST["num1"];
// $y=$_POST["num2"];
// $z=$_POST["num3"];
// $total=null;


//$total =abs($x); //it returns the value without the sign

//$total = round($x); //rounds a number to its nearest integer (whole number)

// $total = floor($x); //rounds down a number (to its nearest smallest integer (whole number))

//$total = ceil($x); //rounds up a number (to its nearest largest integer (whole number))

// $total=pow($x,$y);//x to the power y

//$total=sqrt($x);//square root of x


//maximum number between x, y and z
// $total=max($x,$y,$z);

//minimum number between x, y and z
// $total=min($x,$y,$z);

//print pi number
// $total = pi();

//generate a random number
//$total=rand(1,6); //a random number between 1 to 6

$radius=$_POST["radius"];
$circumferrence=null;
$area=null;
$volume=null;

$circumferrence = 2 * pi() * $radius;
$circumferrence=round($circumferrence,2);
$area=pi()* pow($radius ,2);
$area = round($area,2);
$volume=(4/3)* pi()* pow($radius,3);
$volume=round($volume,2);



echo"The circumferrence of the circle is : {$circumferrence} cm <br>";
echo"The area of the circle is : {$area} cm^2<br>";
echo"The volume of the circle is : {$volume} cm^3<br>";



?>