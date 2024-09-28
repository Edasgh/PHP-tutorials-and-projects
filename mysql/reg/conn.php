<?php

$db_name="businessdb";
$db_password ="264@29ededED";
$db_server="localhost";
$db_user="root";
$conn="";
try{

    $conn = mysqli_connect($db_server,$db_user,$db_password,$db_name);
}
catch(mysqli_sql_exception)
{
    echo"Couldn't connect!";
}

?>