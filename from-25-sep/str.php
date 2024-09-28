<?php
$username="Eshita Das";
$phone="1234-5678-90";

$count=0;
$equals =1;

$count = str_replace("-","",$phone);
// $count = str_pad($username,20,"/");
$index = strpos($username," "); // index of 1st 'a' in $username

$first = substr($username,0,$index);
// substr(original_string, starting_index,ending_index)
$last = substr($username,$index,strlen($username)-1);
// To print everything after an index, just specify the first index not the last
// substr($string,starting_index);
//prints everything from the starting index
$fullname = explode(" ",$username);
// explode function creates array of words from a sentence baed on the separator ("" here)
//echo $first;
//echo " {$last}"."<br>";

foreach($fullname as $name)
{
    echo " {$name} ";
}

$nm=implode(" ",$fullname);

echo"<br> The imploded name : <br> $nm";


?>